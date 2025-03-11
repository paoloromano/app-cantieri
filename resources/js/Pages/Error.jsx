import {Button} from "@nextui-org/react";
import {router} from "@inertiajs/react";

export default function Error({status}) {
  return (
    <div className="flex flex-col items-center justify-center gap-5 h-screen">
      <div className="font-black text-6xl text-slate-200">{status}</div>
      {status === 404 ? (
        <>
          <h1 className="font-black">Hai trovato un posto segreto.</h1>
          <p className="text-center text-gray-500">
            Sembra che tu abbia trovato una pagina che non esiste. <br/>
            Potresti aver digitato male l'indirizzo oppure la pagina è stata trasferita ad un altro URL.
          </p>
        </>
      ) : (
        <>
          <h1 className="font-black">Errore del server.</h1>
          <p className="text-center text-gray-500">Sembra che qualcosa sia andato storto.</p>
        </>
      )}

      <Button color="primary" variant="light" className="w-72 font-medium" size="lg" onPress={() => router.visit(route("login"))}>
        Torna alla home
      </Button>
    </div>
  );
}
