import { initializeApp } from "firebase/app";
const firebaseConfig = {
  apiKey: process.env.APPOINTMENT_BOOKING_WEBSITE_FIREBASE_KEY,
  authDomain: "htcs-51b8e.firebaseapp.com",
  projectId: "htcs-51b8e",
  storageBucket: "htcs-51b8e.appspot.com",
  messagingSenderId: "178794672179",
  appId: "1:178794672179:web:5ec2a415c7868980b7b346"
};

const app = initializeApp(firebaseConfig);