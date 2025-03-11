import {useMedia} from "react-use";
import resolveConfig from "tailwindcss/resolveConfig";
import tailwindConfig from "/tailwind.config.js";

const fullConfig = resolveConfig(tailwindConfig);

const breakpoints = fullConfig?.theme?.screens || {
  xs: "480px",
  sm: "640px",
  md: "768px",
  lg: "1024px",
  xl: "1280px",
};

export function useBreakpoint(breakpointKey, above = true) {
  const breakpointValue = breakpoints[breakpointKey];
  if (above) return useMedia(`(min-width: ${breakpointValue})`);
  return useMedia(`(max-width: ${breakpointValue})`);
}
