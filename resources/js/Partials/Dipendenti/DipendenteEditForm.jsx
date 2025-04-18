import React, { useEffect, useState } from "react";
import { Button, Input } from "@heroui/react";
import { useInertiaForm } from "use-inertia-form";
import { defaultEditForm } from "@/Constants/Dipendenti/initialFormValues.js";
import { FormSection, ResponsiveRow } from "@/Components/Layout.jsx";
import { removeErrors } from "@/Utils/removeErrors.js";

export const DipendenteEditForm = ({ dipendente }) => {
  const [editMode] = useState(!!dipendente);
  const initialFormValues = editMode ? dipendente : defaultEditForm;
  const { data, setData, get, post, put, errors, setError } = useInertiaForm(initialFormValues);

  // Rimuove errori quando si modifica un campo
  useEffect(() => {
    removeErrors(data, errors, setError);
  }, [data]);

  const reset = () => setData(defaultEditForm);

  const submit = () => {
    if (editMode) put(route("dipendenti.update", dipendente.id));
    else post(route("dipendenti.store"));
  };

  const back = () => get(route("dipendenti.index"));

  return (
      <form className="flex flex-col gap-5 max-w">
        <FormSection title="Dettagli Dipendente">
          <ResponsiveRow>
            <Input
                label="Nome dipendente"
                labelPlacement="outside"
                type="text"
                value={data.nome}
                onChange={e => setData("nome", e.target.value)}
                isInvalid={!!errors.nome}
                errorMessage={errors.nome}
                isRequired
            />
            <Input
                label="Cognome dipendente"
                labelPlacement="outside"
                type="text"
                value={data.cognome}
                onChange={e => setData("cognome", e.target.value)}
                isInvalid={!!errors.cognome}
                errorMessage={errors.cognome}
                isRequired
            />
          </ResponsiveRow>

        </FormSection>

        <div className="flex flex-col sm:flex-row justify-end gap-3">
          <Button color="primary" onPress={submit}>
            {editMode ? "Aggiorna dipendente" : "Crea dipendente"}
          </Button>
          <Button color="danger" variant="bordered" onPress={reset}>
            Azzera
          </Button>
          <Button variant="light" onPress={back}>
            Torna indietro
          </Button>
        </div>
      </form>
  );
};
