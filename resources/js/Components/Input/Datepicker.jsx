import {DatePicker as DP} from '@heroui/react';
import {parseDate} from "@internationalized/date";

export const DatePicker = ({value, onChange, ...props}) => {
  return (
    <DP
      value={value !== "" ? parseDate(value) : null}
      onChange={(e) => onChange(e?.toString() ?? "")}
      showMonthAndYearPickers
      {...props}
    />
  );
}
