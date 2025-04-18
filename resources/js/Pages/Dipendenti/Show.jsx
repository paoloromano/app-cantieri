import ShowCardLayout from "@/Layouts/ShowCardLayout.jsx";
import HeroTemplate from "@/Components/HeroTemplate.jsx";
import BalloonTemplate from "@/Components/BalloonTemplate.jsx";

export default function Show({ card, translations, baseUrl, user }) {

  const activeProfile = card.profiles.find(profile => profile.active === 1);

  const profileThemeColor = activeProfile?.profile_theme_color || 'light';
  const profileThemeType = activeProfile?.profile_theme_type || 'balloon';

  const profileButtonColor = activeProfile?.profile_button_color || "#26ACBE";
  const profileLinkColor = activeProfile?.profile_link_color || "#26ACBE";

  let TemplateComponent;
  if (profileThemeType === 'hero') {
    TemplateComponent = HeroTemplate;
  } else if (profileThemeType === 'balloon') {
    TemplateComponent = BalloonTemplate;
  } else {
    TemplateComponent = HeroTemplate;
  }

  return (

    <TemplateComponent
      card={card}
      translations={translations}
      themeColor={profileThemeColor}
      profile={activeProfile}
      profileButtonColor={profileButtonColor}
      profileLinkColor={profileLinkColor}
      user={user}
      baseUrl={baseUrl}
    />
  );
}

Show.layout = (page) => <ShowCardLayout children={page} title="Card"/>;
