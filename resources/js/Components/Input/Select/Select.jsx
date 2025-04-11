import {Select as S, SelectItem as SI} from "@heroui/react";

export const Select = ({
                         name,
                         value,
                         selectionMode = "multiple",
                         placeholder = "Tutte le opzioni",
                         renderValueText = "selezionate",
                         onChange,
                         items,
                         children,
                         ...props
                       }) => {
  return (
    <S
      labelPlacement="outside"
      selectionMode={selectionMode}
      placeholder={placeholder}
      renderValue={(e) => e.length === 1 ? e[0].textValue : `${e.length} ${renderValueText}`}
      selectedKeys={selectionMode === "single" ? [value] : (value ?? [])}
      onSelectionChange={(e) => onChange({[name]: (selectionMode === "single" ? e.values().next().value : Array.from(e))})}
      {...props}
    >
      {items
        ? items.map((item) => (
          <SI key={item.id ?? item.value ?? item} textValue={item.name ?? item}>{item.name ?? item}</SI>
        ))
        : children}
    </S>
  )
}
