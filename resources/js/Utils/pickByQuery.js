import {pickBy} from "lodash";

export function pickByQuery(query, session_rows_per_page) {
  return pickBy(query, (value, key) => {
    if (key === "page" && value === 1) return false;
    if (key === "sorting" && value["column"] === "created_at" && value["direction"] === "descending") return false;
    if (key === "rows_per_page" && value === session_rows_per_page) return false;
    return value !== undefined && value !== null && value !== "" && !(Array.isArray(value) && !value.length);
  });
}
