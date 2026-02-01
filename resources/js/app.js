import "./bootstrap";
import { createApp } from "vue";
import "../css/app.css";
import Welcome from "./Pages/Welcome.vue";

const app = createApp({});
app.component("welcome-component", Welcome);
app.mount("#app");
