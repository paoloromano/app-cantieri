export const removeErrors = (data, errors, setError, force = false) => {
  Object.keys(errors).forEach((field) => {
    if (field.includes(".")) {
      const splitted = field.split(".");
      if (splitted.length === 3) {
        const [parent, index, child] = splitted;
        if (force || (data[parent] && data[parent][index] && data[parent][index][child]))
          setError(field, undefined);
      } else if (splitted.length === 2) {
        const [parent, child] = splitted;
        if (force || (data[parent] && data[parent][child]))
          setError(field, undefined);
      }
    } else if (force || data[field]) {
      setError(field, undefined);
    }
  });
};
