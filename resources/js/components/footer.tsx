import { getSystemSettings } from '@/utils/settings';

export function AppFooter() {
  const settings = getSystemSettings();
  const app_name = settings.app_name || 'lorem';
  const author = settings.author || 'ipsum';

  return (
    <footer className="flex items-left justify-left h-8  border-sidebar-border/50 bg-background px-6 text-sm text-muted-foreground">
      All rights reserved {app_name} © {new Date().getFullYear()}{'. Powered by '}
      <span dangerouslySetInnerHTML={{ __html: author }} />.
    </footer>
  );
}
