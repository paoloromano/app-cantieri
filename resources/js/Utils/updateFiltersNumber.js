// Update the number of filters in the top content
import {pickBy} from "lodash";

export const updateFiltersNumber = (query, setFiltersNumber) => {
  const filters = pickBy(query, (value, key) => {
    if (key === "page" || key === "sorting" || key === "rows_per_page") return false;
    return value !== undefined && value !== null && value !== "" && (Array.isArray(value) ? value.length > 0 : true);
  });
  setFiltersNumber(Object.keys(filters).length);
};
