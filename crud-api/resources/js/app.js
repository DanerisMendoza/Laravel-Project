import './bootstrap';

import { createApp } from "vue";
import Welcome from "./Welcome.vue";
import StudentTable from "./components/StudentTable.vue";


// createApp(Welcome).mount("#app");
createApp(StudentTable).mount("#app");