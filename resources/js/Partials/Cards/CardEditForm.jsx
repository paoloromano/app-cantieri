import {Button, Input} from "@heroui/react";
import {useInertiaForm} from "use-inertia-form";
import {useEffect, useState} from "react";
import {defaultEditForm} from "@/Constants/Cards/initialFormValues.js";
import {FormSection, ResponsiveRow} from "@/Components/Layout.jsx";
import {removeErrors} from "@/Utils/removeErrors.js";
import {__} from "matice";

export const CardEditForm = ({card}) => {
  const [editMode] = useState(!!card);

  const initialFormValues = !editMode ? defaultEditForm : card;

  const {data, setData, get, post, put, errors, setError} = useInertiaForm(initialFormValues);

  // If the relative field is compiled, remove the error message
  useEffect(() => {
    removeErrors(data, errors, setError);
  }, [data]);

  // Handlers
  const reset = () => setData(defaultEditForm);
  const submit = () => {
    if (editMode) put(route("cards.update", card.id));
    else post(route("cards.store"));
  };

  const back = () => {
    get(route("cards.index"));
  }

  const [slugForm, setSlugForm] = useState(data.slug);

  useEffect(() => {
    if (!editMode) {
      const generatedSlug = generateSlug();
      setSlugForm(generatedSlug);
      setData('slug', generatedSlug);
    }
  }, [editMode, setData]);

  return (
    <>
      <form className="flex flex-col gap-5 max-w">

        <FormSection title="Email card">
          <ResponsiveRow>
            <Input
              label={__("Slug")}
              labelPlacement={"outside"}
              type={"text"}
              value={slugForm}
              onChange={(e) => setData("slug", e.target.value)}
              isInvalid={!!errors.slug}
              errorMessage={errors.slug}
              readOnly={true}
            />

            <Input
              label={"Email"}
              labelPlacement={"outside"}
              type={"Email"}
              value={data.email}
              onChange={(e) => setData("email", e.target.value)}
              isInvalid={!!errors.email}
              errorMessage={errors.email}
              isRequired
            />

            <Input
              label={"Name"}
              labelPlacement={"outside"}
              type={"text"}
              value={data.name}
              onChange={(e) => setData("name", e.target.value)}
              isInvalid={!!errors.name}
              errorMessage={errors.name}
              isRequired
            />
          </ResponsiveRow>
        </FormSection>

        <div className="flex flex-col sm:flex-row justify-end gap-3">
          <Button color="primary" onPress={submit}>
            {editMode ? "Aggiorna card" : "Crea card"}
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
