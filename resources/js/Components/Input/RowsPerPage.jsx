import {usePage} from "@inertiajs/react";
import {IconChevronDown} from "@tabler/icons-react";

export const RowsPerPage = ({onRowsPerPage}) => {
  const {session_rows_per_page} = usePage().props;
  const rowsPerPageOptions = [5, 10, 20, 25, 50, 75, 100];

  return (
    <div className="flex items-end">
      <span className="text-default-400 text-small">Records per page</span>
      <select
        className="appearance-none outline-none text-default-400 ml-2 z-10 bg-transparent text-small"
        value={session_rows_per_page.toString()}
        onChange={(e) => onRowsPerPage(e.target.value)}
      >
        {rowsPerPageOptions.map((option) => (
          <option key={option} value={option}>
            {option}
          </option>
        ))}
      </select>
      <IconChevronDown/>
    </div>
  );
};
