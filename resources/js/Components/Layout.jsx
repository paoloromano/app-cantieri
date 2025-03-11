export const ResponsiveRow = ({children, className = ""}) => {
  return <div className={`flex flex-col w-full md:flex-row gap-3 ${className}`}>{children}</div>;
};

export const FormSection = ({children, title, endContent = null, className = ""}) => {
  return <div className={`flex flex-col w-full gap-3 ${className}`}>
    <div className="flex flex-row w-full items-center justify-between">
      <h4>{title}</h4>
      {endContent}
    </div>
    {children}
  </div>;
}
