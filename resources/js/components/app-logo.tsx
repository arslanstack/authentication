import AppLogoIcon from './app-logo-icon';
import { getSystemSettings } from '@/utils/settings';

export default function AppLogo() {
    const settings = getSystemSettings();
    return (
        <>
            <div className="flex aspect-square size-8 items-center justify-center rounded-md bg-sidebar-primary text-sidebar-primary-foreground">
                <AppLogoIcon className="size-5" />
            </div>
            <div className="ml-1 grid flex-1 text-left text-sm">
                <span className="mb-0.5 truncate leading-tight font-semibold">
                    {settings.app_name || 'No Name'}
                </span>
            </div>
        </>
    );
}
