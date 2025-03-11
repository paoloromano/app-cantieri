import ApplicationLogo from "@/Components/ApplicationLogo.jsx";

export default function LoginLayout({ children }) {
  return (
    <section className="flex w-screen h-screen overflow-hidden">
      <div
        className="hidden md:flex w-1/2 h-full bg-cover bg-right relative items-center justify-center"
        style={{backgroundImage: 'url("/images/img-background-app.webp")'}}
      >
        <div className="absolute inset-0 bg-black opacity-50"></div>

        <div className="flex flex-col items-start justify-center z-10 p-10 mx-auto">
          <img
            src="/images/logo-teikei-white.png"
            alt="Image 1"
            className="w-32 mb-2"
          />
          <img
            src="/images/headline-tap-tie-bianco-login.png"
            alt="Image 2"
            className="max-w-xs"
          />
        </div>
      </div>

      <div className="flex w-full md:w-1/2 h-full items-center p-10">
        <div className="w-full max-w-md">
          <div className="md:hidden">
            <ApplicationLogo/>
          </div>
          <div className="mt-12">{children}</div>
        </div>
      </div>
    </section>
  );
}
