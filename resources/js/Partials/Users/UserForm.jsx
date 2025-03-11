import {Button, Checkbox, Input, Radio, RadioGroup, Select, SelectItem, Textarea} from "@nextui-org/react";
import {usePage} from "@inertiajs/react";
import {useInertiaForm} from "use-inertia-form";
import {SelectYear} from "@/Components/Input/Select/SelectYear.jsx";
import {useEffect, useState} from "react";
import {FormSection, ResponsiveRow} from "@/Components/Layout.jsx";
import {omit} from "lodash";
import {useBreakpoint} from "@/Utils/useBreakpoint.js";
import {DatePicker} from "@/Components/Input/Datepicker.jsx";
import {AutocompleteSelect} from "@/Components/Input/Select/AutocompleteSelect.jsx";
import {removeErrors} from "@/Utils/removeErrors.js";
import {__} from "matice";
import {IconMinus, IconPlus} from "@tabler/icons-react";

export const UserForm = ({user}) => {

  const [editMode] = useState(!!user);

  const initialFormValues = !editMode ? defaultForm : user;

  const {data, setData, post, patch, errors, setError} = useInertiaForm(initialFormValues);

  console.log(data)

  // If the relative field is compiled, remove the error message
  useEffect(() => {
    removeErrors(data, errors, setError);
  }, [data]);

  // Handlers

  const reset = () => setData(defaultForm);
  const submit = () => {
    if (editMode) patch(route("users.update", user.id));
    else post(route("users.store"));
  };

  return (
    <>
      <p className="mb-10 font-medium">I campi contrassegnati con <span className="text-danger">*</span> sono obbligatori.</p>
      <form className="flex flex-col gap-5 max-w-[70rem]">

        <FormSection title="Informazioni generali">

          <ResponsiveRow>
            <Input
              label={__("Nome")}
              isRequired
              value={data.name}
              onChange={(e) => setData("name", e.target.value)}
              isInvalid={!!errors.name}
              errorMessage={errors.name}
            />
            <Input
              label={__("Cognome")}
              isRequired
              value={data.lastname}
              onChange={(e) => setData("lastname", e.target.value)}
              isInvalid={!!errors.lastname}
              errorMessage={errors.lastname}
            />
            <Input
              label={__("Email")}
              value={data.email}
              onChange={(e) => setData("email", e.target.value)}
              isInvalid={!!errors.email}
              errorMessage={errors.email}
              disabled={true}
            />
          </ResponsiveRow>
        </FormSection>

        <div className="flex flex-col sm:flex-row justify-end gap-3">

          <Button color="primary" onPress={submit}>
            {editMode ? "Aggiorna utente" : "Crea utente"}
          </Button>

          <Button color="danger" variant="bordered" onPress={reset}>
            Azzera
          </Button>

          <Button variant="light" onPress={() => history.back()}>
            Torna indietro
          </Button>

        </div>
      </form>
    </>
  );
};
