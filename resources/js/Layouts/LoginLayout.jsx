export default function LoginLayout({ children }) {
  return (
      <section className="flex w-screen h-screen overflow-hidden">
        <div className="flex w-full h-full items-center justify-center p-10">
          <div className="w-full max-w-md">
            <div className="">{children}</div>
          </div>
        </div>
      </section>
  );
}