import React, { useEffect, useState } from "react";
import { Button, DatePicker, Input, Textarea } from "@heroui/react";
import { parseDate } from "@internationalized/date";
import { useInertiaForm } from "use-inertia-form";
import { defaultEditForm } from "@/Constants/Cantieri/initialFormValues.js";
import { FormSection, ResponsiveRow } from "@/Components/Layout.jsx";
import { removeErrors } from "@/Utils/removeErrors.js";

// Helper: estrae la parte YYYY-MM-DD da una stringa "YYYY-MM-DD hh:mm:ss"
function toISODateOnly(dbDateTime) {
  if (!dbDateTime) return null;
  const [datePart] = dbDateTime.split(" ");
  return datePart;
}

// Helper: converte la stringa DB in CalendarDate
function toCalendarDate(dbDateTime) {
  const iso = toISODateOnly(dbDateTime);
  return iso ? parseDate(iso) : null;
}

// Helper: ricompone la stringa per il DB
function toDBDateTime(calendarDate) {
  if (!calendarDate) return null;
  return calendarDate.toString() + " 00:00:00";
}

export const CantiereEditForm = ({ cantiere }) => {
  const [editMode] = useState(!!cantiere);
  const initialFormValues = editMode ? cantiere : defaultEditForm;
  const { data, setData, get, post, put, errors, setError } = useInertiaForm(initialFormValues);

  // Rimuove errori quando si modifica un campo
  useEffect(() => {
    removeErrors(data, errors, setError);
  }, [data]);

  const reset = () => setData(defaultEditForm);

  const submit = () => {
    if (editMode) put(route("cantieri.update", cantiere.id));
    else post(route("cantieri.store"));
  };

  const back = () => get(route("cantieri.index"));

  return (
      <form className="flex flex-col gap-5 max-w">
        <FormSection title="Dettagli Cantiere">
          <ResponsiveRow>
            <Input
                label="Nome cantiere"
                labelPlacement="outside"
                type="text"
                value={data.nome}
                onChange={e => setData("nome", e.target.value)}
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
                onChange={e => setData("descrizione", e.target.value)}
                isInvalid={!!errors.descrizione}
                errorMessage={errors.descrizione}
            />
          </ResponsiveRow>

          <ResponsiveRow>
            <DatePicker
                isRequired
                label="Data inizio"
                labelPlacement="outside"
                value={toCalendarDate(data.data_inizio)}
                onChange={date => setData("data_inizio", toDBDateTime(date))}
                isInvalid={!!errors.data_inizio}
                errorMessage={errors.data_inizio}
            />
            <DatePicker
                label="Data fine"
                labelPlacement="outside"
                value={toCalendarDate(data.data_fine) ? toCalendarDate(data.data_fine) : null}
                onChange={date => setData("data_fine", toDBDateTime(date) ? toDBDateTime(date) : null)}
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
  );
};
