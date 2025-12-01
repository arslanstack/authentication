import { ImgHTMLAttributes } from 'react';
import { getSystemSettings } from '@/utils/settings';

interface AppLogoIconProps extends ImgHTMLAttributes<HTMLImageElement> {}

export default function AppLogoIcon(props: AppLogoIconProps) {
  const settings = getSystemSettings();
  const logo = settings.logo || 'logo.png';
  return <img src={`/${logo}`} alt="App Logo"/>;
}
