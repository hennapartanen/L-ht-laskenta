const daysElement = document.getElementById("days");
const hoursElement = document.getElementById("hours");
const minutesElement = document.getElementById("mins");
const secondsElement = document.getElementById("seconds");


const newEvent = "1 Jan 2021";

function countdown() {
  const newEventDate = new Date(newEvent);
  const currentDate = new Date();

  const totalSeconds = (newEventDate - currentDate) / 1000;

  const days = Math.floor(totalSeconds / 3600 / 24);
  const hours = Math.floor(totalSeconds / 3600) % 24;
  const minutes = Math.floor(totalSeconds / 60) % 60;
  const seconds = Math.floor(totalSeconds) % 60;

  daysElement.innerHTML = timeFormat(days);
  hoursElement.innerHTML = timeFormat(hours);
  minutesElement.innerHTML = timeFormat(minutes);
  secondsElement.innerHTML = timeFormat(seconds);
}

function timeFormat(time) {
  return time < 10 ? `0${time}` : time;
}


countdown();

setInterval(countdown, 1000);

