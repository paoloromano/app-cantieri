import { useBreakpoint } from "@/Utils/useBreakpoint.js";
import React from "react";
import { Button, Popover, PopoverContent, PopoverTrigger } from "@nextui-org/react";
import Logo from "../../../public/images/logo-teikei-norm.png";
import showIcon from "../../../public/icons/png/icon-look.png";
import { Head } from "@inertiajs/react";
import { Inertia } from "@inertiajs/inertia";

const flagIconsSmall = {
  en: "/icons/png/flag-eng-small.png",
  es: "/icons/png/flag-esp-small.png",
  fr: "/icons/png/flag-fra-small.png",
  de: "/icons/png/flag-ger-small.png",
  it: "/icons/png/flag-ita-small.png",
  pt: "/icons/png/flag-por-small.png",
};

const flagIconsBig = {
  en: "/icons/png/flag-eng-big.png",
  es: "/icons/png/flag-esp-big.png",
  fr: "/icons/png/flag-fra-big.png",
  de: "/icons/png/flag-ger-big.png",
  it: "/icons/png/flag-ita-big.png",
  pt: "/icons/png/flag-por-big.png",
};

export default function AuthenticatedCardRoleLayout({ children, card }) {
  const isCompact = useBreakpoint("xl", false);

  const updateLanguage = (lang) => {
    Inertia.patch(`/cards/${card.id}/edit-current-lang`, { lang }, {
      onSuccess: () => {

      }
    });
  };

  const current_lang = card.lang || card.current_lang;

  return (
    <>
      <Head title="Teikei"/>
      <div>
        <aside className={"flex ml-auto flex-row p-6 transition-width bg-transparent z-10 justify-between"}>
          <div className={"flex gap-3"}>
            <div className="flex -ml-[4px] rounded-full">
              <img src={Logo} alt="Logo" className="w-32"/>
            </div>
          </div>

          <div className={"flex gap-2"}>
            <div className={"flex flex-col justify-center"}>
              <Popover
                showArrow
                placement="bottom"
                classNames={{
                  base: [
                    // arrow color
                    "before:bg-primary"
                  ],
                  content: [
                    "py-2 px-2 bg-primary text-white",
                  ],
                }}
              >
                <PopoverTrigger className={"bg-primary"}>
                  <Button isIconOnly className={"bg-transparent"}>
                    <img src={flagIconsBig[current_lang]} alt="Current Language" className="w-10 h-10"/>
                  </Button>
                </PopoverTrigger>
                <PopoverContent className={"bg-primary"}>
                  <div className="grid grid-cols-2">
                    {card.all_langs
                      .filter((lang) => lang !== current_lang)
                      .map((lang) => (
                        <div
                          key={lang}
                          className="flex items-center p-2 cursor-pointer hover:bg-gray-200 rounded"
                          onClick={() => updateLanguage(lang)}
                        >
                          <img src={flagIconsSmall[lang]} alt={`${lang} Flag`} className="w-6 h-6 mr-2"/>
                          <span className="text-white">{lang.toUpperCase()}</span>
                        </div>
                      ))}
                  </div>
                </PopoverContent>
              </Popover>
            </div>

            <div className={"flex flex-col justify-center"}>
              <div className="flex items-center justify-center rounded-full">
                <Button
                  isIconOnly
                  endContent={<img src={showIcon} alt="Show Icon" className="size-10"/>}
                  variant="light"
                  onPress={() => {
                    if (card.status === 1) {
                      window.open(`/card/${card.slug}`, '_blank');
                    }
                  }}
                />
              </div>
            </div>
          </div>
        </aside>
      </div>

      <main className="transition-all ml-auto">
        {children}
      </main>
    </>
  );
}
