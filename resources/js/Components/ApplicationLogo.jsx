import Logo from "/public/images/logo-teikei-norm.png";

export default function ApplicationLogo(props) {
  return <a href={"/"}> <img src={Logo} alt="logo" className="w-48" {...props} /></a>;
}
