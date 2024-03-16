function startTimer(duration) {
    let timer = duration;
    setInterval(function () {
      const hours = Math.floor(timer / 3600);
      const minutes = Math.floor((timer % 3600) / 60);
      const seconds = timer % 60;
  
      document.getElementById("hours").textContent = hours < 10 ? "0" + hours : hours;
      document.getElementById("minutes").textContent = minutes < 10 ? "0" + minutes : minutes;
      document.getElementById("seconds").textContent = seconds < 10 ? "0" + seconds : seconds;
  
      if (--timer < 0) {
        timer = duration;
      }
    }, 1000);
  }
  
  window.onload = function () {
    const timerDuration = 60 * 60; // Время в секундах (например, 1 час)
    startTimer(timerDuration);
  };