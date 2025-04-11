import MS from "react-select";
import {semanticColors} from "@heroui/theme";

export const AutocompleteSelect = ({
                                     label,
                                     className = "",
                                     options,
                                     value,
                                     onChange = () => null,
                                     errorMessage,
                                     readOnly = false,
                                     isMulti = true,
                                     placeholder = "",
                                     isInvalid = false,
                                     isRequired = false,
                                   }) => {
  const defaultColor = semanticColors.light.default;
  const dangerColor = semanticColors.light.danger;

  const MSOptions = options?.map(({id, name}) => ({value: id.toString(), label: name.toString()}));
  const findOption = (id) => MSOptions.find((opt) => opt.value === id)?.label;
  const buildOption = (id) => ({value: id?.toString() ?? "", label: findOption(id?.toString()) ?? ""});
  const handleValue = isMulti ? value?.map(buildOption) : buildOption(value);
  const handleChange = (e) => onChange(isMulti ? e?.map((opt) => opt.value.toString()) : e?.value.toString());

  const styles = {
    menuPortal: (base) => ({...base, zIndex: 100}),
    valueContainer: (base, state) => ({
      ...base,
      backgroundColor: isInvalid ? dangerColor[50] : state.isHovered ? defaultColor[200] : defaultColor[100],
      borderTopLeftRadius: 12,
      borderBottomLeftRadius: 12,
      padding: isMulti ? "12px" : "4px 10px",
    }),
    indicatorsContainer: (base) => ({
      ...base,
      backgroundColor: isInvalid ? dangerColor[50] : defaultColor[100],
      borderTopRightRadius: 12,
      borderBottomRightRadius: 12,
    }),
    multiValue: (base) => ({
      ...base,
      backgroundColor: "white",
    }),
    control: (base) => ({
      ...base,
      border: "0px solid black",
      boxShadow: "none",
    }),
    placeholder: (base) => ({
      ...base,
      fontWeight: 450,
      color: "hsl(240 4% 46%)",
    }),
  };
  const theme = (t) => ({
    ...t,
    borderRadius: 12,
    colors: {
      ...t.colors,
      primary: "#3C75C9",
    },
  });

  return (
    <div className={"flex-col w-full gap-1.5 space-y-1 overflow-hidden " + className}>
      {label && <label className="text-sm text-foreground-500">
        {label}
        {isRequired && <span className="text-danger ml-0.5">*</span>}
      </label>}
      <MS
        isMulti={isMulti}
        options={MSOptions}
        value={handleValue}
        placeholder={placeholder}
        menuPosition="fixed"
        isClearable
        noOptionsMessage={() => "Nessuna opzione disponibile"}
        required={isRequired}
        onChange={handleChange}
        isDisabled={readOnly}
        aria-sort="descending"
        styles={styles}
        theme={theme}
      />
      {isInvalid && errorMessage && <div className="text-tiny text-danger">{errorMessage}</div>}
    </div>
  );
};
