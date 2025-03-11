import {Spacer} from "@nextui-org/react";
import {__} from "matice";

const DataRender = ({name, data, entity}) => {
  function isValidUrl(string) {
    try {
      new URL(string);
      return true;
    } catch (err) {
      return false;
    }
  }

  return (
    <div>
      <b>{__(`${entity}.attributes.${name}`)}</b>
      <p>
        {data ? (
          isValidUrl(data) ? (
            <a href={data} target="_blank" className="underline font-medium">
              {data}
            </a>
          ) : (
            data
          )
        ) : (
          "-"
        )}
      </p>
    </div>
  );
};

export const InfoCard = ({title, data, info, headingClassname, variant = "primary", className, entity}) => {
  const primary = " bg-primary text-primary-foreground";
  const primaryDark = " bg-primary-dark text-primary-foreground";
  const yellow = " border-2 bg-yellow-400 border-yellow-400";

  if (variant === "primary") className += primary;
  if (variant === "primaryDark") className += primaryDark;
  if (variant === "yellow") className += yellow;

  return (
    <>
      <div className="break-inside-avoid">
        <div className={"rounded-2xl p-5 space-y-2 break-words border border-gray-200 shadow-md " + className}>
          <p className={"text-xl mb-2 font-bold uppercase " + headingClassname}>{title}</p>
          {info.map((name) => {
            return <DataRender key={name} name={name} data={data[name]} entity={entity}/>;
          })}
        </div>
        <Spacer y={3}/>
      </div>
    </>
  );
};
