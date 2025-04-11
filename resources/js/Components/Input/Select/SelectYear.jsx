import {SelectItem} from "@heroui/react";
import {Select} from "@/Components/Input/Select/Select.jsx"; // Date from current year to 1900

export const SelectYear = ({isolateYear, ...props}) => {
  const current = new Date().getFullYear();
  const start = 1900;

  let yearsOptions = Array.from({length: current - start + 1}, (_, i) => current - i);
  if (isolateYear === "start") yearsOptions = Array.from({length: current - start}, (_, i) => current - i);
  if (isolateYear === "end") yearsOptions = Array.from({length: current - start}, (_, i) => current - i - 1);

  return (
    <Select
      selectionMode="single"
      placeholder=""
      {...props}
    >
      {isolateYear === "start" && (
        <SelectItem key="" textValue={start.toString()} showDivider>
          {start}
        </SelectItem>
      )}

      {isolateYear === "end" && (
        <SelectItem key="" textValue={current.toString()} showDivider>
          {current}
        </SelectItem>
      )}

      {
        yearsOptions.map((year) => (
          <SelectItem key={year} textValue={year.toString()}>
            {year}
          </SelectItem>
        ))
      }
    </Select>
  );
};
