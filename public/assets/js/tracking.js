let currentIndex = 0;
const stationDivs = document.querySelectorAll('.station');

function parseTimeToDate(timeStr) {
  // Parses "HH:mm" into a Date object for today with that time
  const now = new Date();
  const [hours, minutes] = timeStr.split(':').map(Number);
  const date = new Date(now.getFullYear(), now.getMonth(), now.getDate(), hours, minutes, 0, 0);
  return date;
}

function updateStationHighlight() {
  stationDivs.forEach(div => div.classList.remove('current'));

  if (stationDivs[currentIndex]) {
    stationDivs[currentIndex].classList.add('current');
  }

  if (currentIndex < stations.length - 1) {
    // Calculate the wait time between current and next station times in milliseconds
    const currentTime = parseTimeToDate(stations[currentIndex].time);
    const nextTime = parseTimeToDate(stations[currentIndex + 1].time);

    let waitTime = nextTime - currentTime;

    // If waitTime is negative or zero (e.g., times cross midnight or invalid), fallback to 3 seconds
    if (waitTime <= 0) {
      waitTime = 3000;
    }

    currentIndex++;
    setTimeout(updateStationHighlight, waitTime);
  }
}

function updateStationInfo() {
  stationDivs.forEach((div, index) => {
    const stationData = stations[index];
    if (!stationData) return;

    let timeDiv = div.querySelector('.time');
    if (!timeDiv) {
      timeDiv = document.createElement('div');
      timeDiv.className = 'time';
      div.appendChild(timeDiv);
    }
    timeDiv.textContent = stationData.time || '';

    let delayDiv = div.querySelector('.delay');
    if (!delayDiv) {
      delayDiv = document.createElement('div');
      delayDiv.className = 'delay';
      div.appendChild(delayDiv);
    }
    delayDiv.textContent = stationData.delay > 0 ? `+${stationData.delay} min` : '+0 min';
    delayDiv.className = 'delay ' + (stationData.delay > 0 ? 'late' : 'early');
  });
}

document.addEventListener('DOMContentLoaded', () => {
  updateStationInfo();
  updateStationHighlight();
});
