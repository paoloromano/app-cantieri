import {Button, DatePicker, Input, Textarea} from "@heroui/react";
import {useInertiaForm} from "use-inertia-form";
import {useEffect, useState} from "react";
import {defaultEditForm} from "@/Constants/Cantieri/initialFormValues.js";
import {FormSection, ResponsiveRow} from "@/Components/Layout.jsx";
import {removeErrors} from "@/Utils/removeErrors.js";

export const CantiereEditForm = ({cantiere}) => {

  const [editMode] = useState(!!cantiere);

  const initialFormValues = !editMode ? defaultEditForm : cantiere;

  const {data, setData, get, post, put, errors, setError} = useInertiaForm(initialFormValues);

  // If the relative field is compiled, remove the error message
  useEffect(() => {
    removeErrors(data, errors, setError);
  }, [data]);

  // Handlers
  const reset = () => setData(defaultEditForm);
  const submit = () => {
    if (editMode) put(route("cantieri.update", cantiere.id));
    else post(route("cantieri.store"));
  };

  const back = () => {
    get(route("cantieri.index"));
  }

  return (
    <>
      <form className="flex flex-col gap-5 max-w">

        <FormSection title="">
          <ResponsiveRow>
            <Input
              label="Nome cantiere"
              labelPlacement="outside"
              type="text"
              value={data.nome}
              onChange={(e) => setData("nome", e.target.value)}
              isInvalid={!!errors.nome}
              errorMessage={errors.nome}
              isRequired
            />

          </ResponsiveRow>

          <ResponsiveRow>
            <Textarea
                label="Descrizione"
                labelPlacement="outside"
                value={data.descrizione}
                onChange={(e) => setData("descrizione", e.target.value)}
                isInvalid={!!errors.descrizione}
                errorMessage={errors.descrizione}
            />
          </ResponsiveRow>

          <ResponsiveRow>
            <DatePicker
                isRequired
                label="Data inizio"
                labelPlacement="outside"
                // Se devi gestire date e/o orari, valuta un format o un parser
                value={data.data_inizio ? data.data_inizio : null}
                onChange={(date) => setData("data_inizio", date)}
                isInvalid={!!errors.data_inizio}
                errorMessage={errors.data_inizio}
            />
            <DatePicker
                label="Data fine"
                labelPlacement="outside"
                value={data.data_fine ? data.data_fine : null}
                onChange={(date) => setData("data_fine", date)}
                isInvalid={!!errors.data_fine}
                errorMessage={errors.data_fine}
            />
          </ResponsiveRow>

        </FormSection>

        <div className="flex flex-col sm:flex-row justify-end gap-3">
          <Button color="primary" onPress={submit}>
            {editMode ? "Aggiorna cantiere" : "Crea cantiere"}
          </Button>

          <Button color="danger" variant="bordered" onPress={reset}>
            Azzera
          </Button>

          <Button variant="light" onPress={back}>
            Torna indietro
          </Button>
        </div>
      </form>
    </>
  );
};