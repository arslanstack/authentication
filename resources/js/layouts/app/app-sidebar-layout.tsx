// resources/js/layouts/app/app-sidebar-layout.tsx
import { AppContent } from '@/components/app-content';
import { AppShell } from '@/components/app-shell';
import { AppSidebar } from '@/components/app-sidebar';
import { AppSidebarHeader } from '@/components/app-sidebar-header';
import { AppFooter } from '@/components/footer';
import { type BreadcrumbItem } from '@/types';
import { type PropsWithChildren } from 'react';

export default function AppSidebarLayout({
    children,
    breadcrumbs = [],
}: PropsWithChildren<{ breadcrumbs?: BreadcrumbItem[] }>) {
    return (
        <AppShell variant="sidebar">
            <AppSidebar />

            {/* Make content container full height with flex-col */}
            <div className="flex flex-col min-h-screen flex-1 overflow-x-hidden">
                <AppContent variant="sidebar" className="flex-1 flex flex-col">
                    <AppSidebarHeader breadcrumbs={breadcrumbs} />
                    
                    {/* Main page content grows to fill available space */}
                    <main className="flex-1">{children}</main>
                </AppContent>

                {/* Footer always at the bottom */}
                <AppFooter />
            </div>
        </AppShell>
    );
}
