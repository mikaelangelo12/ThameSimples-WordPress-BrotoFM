<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <style>
    html {
  height: 100%;
}
body {
  background: #FFF linear-gradient(15deg, #557C05, #557C05, #557C05) no-repeat;
  background-size: 100% 200%;
  animation: background-scroll 7s alternate ease-in-out infinite;
  font-family: 'Open Sans', sans-serif;
  font-weight: 100;
  user-select: none;
}
input[type="range"] {
  -webkit-appearance: none;
  outline: none;
}
.start-radio-button {
  position: absolute;
  top: 200px;
  left: 0;
  right: 0;
  margin: auto;
  width: 240px;
  padding: 15px 0;
  background: rgba(0, 0, 0, 0.1);
  cursor: pointer;
  display: block;
  text-align: center;
  font-size: 40px;
  color: #FFF;
  opacity: 0;
  transition-timing-function: cubic-bezier(0.25, 1.5, 0.7, 1);
  transform: translateY(50px);
  transition-duration: 0.6s;
  transition-delay: 0.3s;
}
.window {
  width: 350px;
  height: 70px;
  margin: 100px auto;
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  background: #FFF;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.1), 0 0 25px rgba(0, 0, 0, 0.1);
  opacity: 0;
  transform: translateY(-50px);
  transition-timing-function: cubic-bezier(0.25, 1.5, 0.7, 1);
}
.window:hover .page.page-front .cover .tool-buttons {
  opacity: 1;
}
.window .top-bar {
  height: 70px;
  background: #FFF;
  position: relative;
  transform: scale(0.4);
  opacity: 0;
}
.window .top-bar .left-action,
.window .top-bar .right-action {
  position: absolute;
  top: 0;
  height: 70px;
  width: 70px;
  cursor: pointer;
  opacity: 0.4;
  transition-duration: 0.3s;
}
.window .top-bar .left-action:hover,
.window .top-bar .right-action:hover {
  opacity: 1;
  transition-duration: 0.05s;
}
.window .top-bar .left-action {
  left: 0;
}
.window .top-bar .left-action .line {
  position: absolute;
  left: 23px;
  width: 25px;
  height: 2px;
  background: #555;
  transition-duration: 0.3s;
}
.window .top-bar .left-action .line-1 {
  top: 27px;
}
.window .top-bar .left-action .line-2 {
  top: 35px;
}
.window .top-bar .left-action .line-3 {
  top: 43px;
}
.window .top-bar .right-action {
  right: 0;
}
.window .top-bar .right-action .line {
  transition-duration: 0.3s;
}
.window .top-bar .right-action .line-1 {
  position: absolute;
  top: 25px;
  right: 20px;
  height: 20px;
  width: 20px;
  border-radius: 100px;
  border: 2px solid #555;
}
.window .top-bar .right-action .line-2 {
  position: absolute;
  top: 25px;
  right: 31px;
  height: 8px;
  width: 0;
  border: 1px solid #555;
  border-radius: 100px;
  z-index: 2;
}
.window .top-bar .right-action .line-3 {
  position: absolute;
  top: 25px;
  right: 28px;
  height: 7px;
  width: 8px;
  background: #FFF;
  z-index: 1;
}
.window .top-bar .mid-text {
  text-align: center;
  line-height: 70px;
  height: 70px;
  font-size: 25px;
}
.window .top-bar .mid-text .title {
  position: absolute;
  top: 0;
  left: 70px;
  right: 70px;
  bottom: 0;
  text-align: center;
  transition-duration: 0.3s;
}
.window .top-bar .mid-text .page-front-title {
  color: #557C05;
}
.window .top-bar .mid-text .page-saved-stations-title {
  color: #557C05;
  opacity: 0;
  transform: scale(0.4);
}
.window .page {
  position: absolute;
  top: 70px;
  left: 0;
  right: 0;
  height: 390px;
}
.window .page.page-front {
  z-index: 1;
}
.window .page.page-front .cover {
  height: 100px;
  background: #FFF linear-gradient(15deg, #557C05, #557C05, #557C05) no-repeat;
  background-size: 100% 200%;
  animation: background-scroll 7s alternate ease-in-out infinite;
  position: relative;
  overflow: hidden;
  opacity: 0;
}
.window .page.page-front .cover .glow {
  position: absolute;
  top: -50px;
  left: -80px;
  height: 120px;
  width: 300px;
  background: linear-gradient(360deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
  z-index: 3;
  transform: rotate(-45deg);
  pointer-events: none;
  opacity: 0;
}
.window .page.page-front .cover .tool-buttons {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 3;
  opacity: 0;
  transition-duration: 0.3s;
}
.window .page.page-front .cover .tool-buttons li {
  float: left;
  padding: 7px 10px;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 5px;
  color: #FFF;
  margin-left: 10px;
  font-size: 14px;
  cursor: pointer;
  transition-duration: 0.3s;
}
.window .page.page-front .cover .tool-buttons li:hover {
  transition-duration: 0.05s;
  background: rgba(255, 255, 255, 0.25);
}
.window .page.page-front .cover .current-station-text {
  font-size: 60px;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  line-height: 250px;
  text-align: center;
  color: #FFF;
  z-index: 2;
  opacity: 0;
}
.window .page.page-front .cover .current-station-name-bar {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 70px;
  color: #FFF;
  z-index: 2;
  opacity: 0;
}
.window .page.page-front .cover .current-station-name-bar .left-action,
.window .page.page-front .cover .current-station-name-bar .right-action {
  position: absolute;
  top: 0;
  height: 70px;
  width: 70px;
  line-height: 70px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  opacity: 0.5;
  transition-duration: 0.3s;
}
.window .page.page-front .cover .current-station-name-bar .left-action:hover,
.window .page.page-front .cover .current-station-name-bar .right-action:hover {
  opacity: 1;
  transition-duration: 0.05s;
}
.window .page.page-front .cover .current-station-name-bar .left-action {
  left: 0;
}
.window .page.page-front .cover .current-station-name-bar .right-action {
  right: 0;
}
.window .page.page-front .cover .current-station-name-bar .mid-text {
  text-align: center;
  line-height: 70px;
  height: 70px;
  font-size: 25px;
}
.window .page.page-front .cover .sound-bars {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  line-height: 70px;
  z-index: 1;
}
.window .page.page-front .cover .sound-bars .bar {
  margin-top: 125px;
  transform: translateY(-50%);
  height: 0;
  width: 4px;
  background: rgba(255, 255, 255, 0.13);
  float: left;
  margin-right: 3px;
  animation-delay: 2s;
}
.window .page.page-front .cover .sound-bars .bar:first-child {
  margin-left: 2px;
}
.window .page.page-front .cover .sound-bars .bar:last-child {
  margin-right: 0;
}
.window .page.page-front .cover .sound-bars .bar.wave-1 {
  animation: wave1 0.5s linear alternate infinite;
}
.window .page.page-front .cover .sound-bars .bar.wave-2 {
  animation: wave2 0.7s linear alternate infinite;
}
.window .page.page-front .cover .sound-bars .bar.wave-3 {
  animation: wave3 0.6s linear alternate infinite;
}
.window .page.page-front .cover .sound-bars .bar.wave-4 {
  animation: wave4 0.5s linear alternate infinite;
}
.window .page.page-front .cover .sound-bars .bar.wave-5 {
  animation: wave1 0.6s linear alternate infinite;
}
.window .page.page-front .cover .sound-bars .bar.wave-6 {
  animation: wave2 0.7s linear alternate infinite;
}
.window .page.page-front .cover .sound-bars .bar.wave-7 {
  animation: wave3 0.5s linear alternate infinite;
}
.window .page.page-front .cover .sound-bars .bar.wave-8 {
  animation: wave4 0.6s linear alternate infinite;
}
.window .page.page-front .cover .sound-bars .bar.wave-9 {
  animation: wave1 0.7s linear alternate infinite;
}
.window .page.page-front .cover .sound-bars .bar.wave-10 {
  animation: wave2 0.5s linear alternate infinite;
}
.window .page.page-front .swipe-bar {
  position: relative;
  background: linear-gradient(to bottom, #381026, #462E48);
  height: 0;
  opacity: 0;
  overflow: hidden;
}
.window .page.page-front .swipe-bar .range-ruler {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  z-index: 1;
}
.window .page.page-front .swipe-bar .range-ruler .mid-line {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  height: 1px;
  background: #7C6375;
}
.window .page.page-front .swipe-bar .range-ruler .text {
  float: left;
  width: 0;
  margin-top: 45px;
  font-size: 13px;
  color: #7C6375;
  text-indent: -5px;
}
.window .page.page-front .swipe-bar .range-ruler .text.long {
  text-indent: -10px;
}
.window .page.page-front .swipe-bar .range-ruler .point {
  width: 12px;
  margin-top: 45px;
  float: left;
  position: relative;
}
.window .page.page-front .swipe-bar .range-ruler .point:first-child {
  margin-left: 26px;
}
.window .page.page-front .swipe-bar .range-ruler .point:nth-child(6),
.window .page.page-front .swipe-bar .range-ruler .point:nth-child(13),
.window .page.page-front .swipe-bar .range-ruler .point:nth-child(20) {
  width: 11px;
}
.window .page.page-front .swipe-bar .range-ruler .point::after {
  position: absolute;
  top: -20px;
  height: 10px;
  width: 1px;
  background: #7C6375;
  content: '';
}
.window .page.page-front .swipe-bar .range-ruler .point.long::after {
  height: 20px;
  top: -30px;
}
.window .page.page-front .swipe-bar .range-ruler .point::before {
  position: absolute;
  top: -12px;
  left: -3px;
  border: 3px solid #FFF;
  border-radius: 10px;
  content: '';
  z-index: 2;
  opacity: 0;
}
.window .page.page-front .swipe-bar .range-ruler .point.dot::before {
  opacity: 1;
}
.window .page.page-front .swipe-bar .range {
  -moz-appearance: none !important;
  -webkit-appearence: none !important;
  position: relative;
  z-index: 2;
  margin: 0 auto;
  height: 67px;
  width: 85%;
  display: block;
  background: transparent;
  outline: none;
  border: 0;
}
.window .page.page-front .swipe-bar .range:hover::-webkit-slider-thumb::before,
.window .page.page-front .swipe-bar .range:active::-webkit-slider-thumb::before {
  opacity: 1;
  transform: none;
}
.window .page.page-front .swipe-bar .range::-webkit-slider-runnable-track {
  -webkit-appearance: none !important;
  height: 70px;
  background: transparent;
  outline: none;
}
.window .page.page-front .swipe-bar .range::-webkit-slider-thumb {
  -webkit-appearance: none !important;
  position: relative;
  height: 70px;
  width: 1px;
  background: #EE0085;
}
.window .page.page-front .swipe-bar .range::-webkit-slider-thumb::before {
  position: absolute;
  top: 28px;
  left: -9px;
  height: 18px;
  width: 18px;
  background: linear-gradient(to bottom, #FFF, #F5F5F5);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.03), 1px 1px 3px rgba(0, 0, 0, 0.2);
  border-radius: 100px;
  opacity: 1;
  transform: scale(0.4);
  transition-duration: 0.2s;
  transition-timing-function: cubic-bezier(0.25, 2, 0.7, 1);
  content: '';
}
.window .page.page-front .swipe-bar .range::-moz-range-track {
  -moz-appearance: none !important;
  height: 70px;
  background: transparent;
}
.window .page.page-front .swipe-bar .range::-moz-range-thumb {
  -moz-appearance: none !important;
  position: relative;
  width: 11px;
  height: 18px;
  width: 18px;
  background: linear-gradient(to bottom, #FFF, #F5F5F5);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.03), 1px 1px 3px rgba(0, 0, 0, 0.2);
  border: 0;
  border-radius: 100px;
}
.window .page.page-front .volume-bar {
  position: relative;
  background: #F7F7F7;
  height: 70px;
  opacity: 0;
}
.window .page.page-front .volume-bar .left-icon {
  position: absolute;
  top: 0;
  left: 0;
  height: 70px;
  width: 70px;
  line-height: 70px;
  text-align: center;
  font-size: 30px;
  color: #CCC;
}
.window .page.page-front .volume-bar .range {
  position: absolute;
  top: 0;
  right: 25px;
  width: 72%;
  height: 70px;
  background: transparent;
  margin: 0;
  -webkit-appearance: none !important;
}
.window .page.page-front .volume-bar .range::-webkit-slider-runnable-track {
  -webkit-appearance: none !important;
  height: 70px;
  background: transparent;
  outline: none;
  position: relative;
}
.window .page.page-front .volume-bar .range::-webkit-slider-runnable-track::after {
  position: absolute;
  left: 0;
  right: 0;
  height: 2px;
  top: 50%;
  background: #CCC;
  content: '';
}
.window .page.page-front .volume-bar .range::-webkit-slider-thumb {
  -webkit-appearance: none !important;
  position: relative;
  top: 27px;
  left: 0;
  z-index: 1;
  width: 11px;
  height: 18px;
  width: 18px;
  background: linear-gradient(to bottom, #FFF, #F5F5F5);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.03), 1px 1px 3px rgba(0, 0, 0, 0.2);
  border-radius: 100px;
}
.window .page.page-front .volume-bar .range::-moz-slider-runnable-track {
  height: 70px;
  background: transparent;
  outline: none;
  position: relative;
}
.window .page.page-front .volume-bar .range::-moz-slider-runnable-track::after {
  position: absolute;
  left: 0;
  right: 0;
  height: 2px;
  top: 50%;
  background: #CCC;
  content: '';
}
.window .page.page-front .volume-bar .range::-moz-range-thumb {
  position: relative;
  top: 27px;
  left: 0;
  z-index: 1;
  width: 11px;
  height: 18px;
  width: 18px;
  background: linear-gradient(to bottom, #FFF, #F5F5F5);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.03), 1px 1px 3px rgba(0, 0, 0, 0.2);
  border-radius: 100px;
}
.window .page.page-saved-stations {
  z-index: 1;
  background: #382235;
  overflow: hidden;
  transition-duration: 0.3s;
  opacity: 0;
  pointer-events: none;
}
.window .page.page-saved-stations .station-list {
  padding-top: 15px;
}
.window .page.page-saved-stations .station-list li {
  display: block;
  cursor: pointer;
  transform: translateX(20%);
  opacity: 0;
}
.window .page.page-saved-stations .station-list li .link {
  color: #A38AA0;
  transition-duration: 0.3s;
  height: 60px;
  line-height: 60px;
  padding: 0 40px;
  font-size: 20px;
  display: block;
}
.window .page.page-saved-stations .station-list li .link:hover {
  color: #FFF;
  transition-duration: 0.05s;
}
.window .page.page-saved-stations .station-list li .link .bar-bouncer {
  display: inline-block;
  position: relative;
  height: 30px;
  margin-left: 20px;
}
.window .page.page-saved-stations .station-list li .link .bar-bouncer .bar {
  position: absolute;
  bottom: 0;
  width: 4px;
  background: #B447E2;
}
.window .page.page-saved-stations .station-list li .link .bar-bouncer .bar:last-child {
  margin-right: 0;
}
.window .page.page-saved-stations .station-list li .link .bar-bouncer .bar1 {
  left: 0;
  animation: wave2 0.5s linear alternate infinite;
}
.window .page.page-saved-stations .station-list li .link .bar-bouncer .bar2 {
  left: 8px;
  animation: wave4 0.5s linear alternate infinite;
  animation-delay: 0.1s;
}
.window .page.page-saved-stations .station-list li .link .bar-bouncer .bar3 {
  left: 16px;
  animation: wave3 0.5s linear alternate infinite;
  animation-delay: 0.2s;
}
.window .page.page-saved-stations .station-list li .link .num {
  float: right;
  color: #A38AA0;
  font-size: 15px;
  opacity: 0;
  transform: translateX(-50%);
  transition-duration: 0s;
  transition-delay: 0s;
}
.window .page.page-saved-stations .station-list li.active .link,
.window .page.page-saved-stations .station-list li.active .link:hover {
  color: #FFF;
}
@-webkit-keyframes wave1 {
  0% {
    height: 10%;
  }
  33% {
    height: 30%;
  }
  66% {
    height: 15%;
  }
  100% {
    height: 55%;
  }
}
@-moz-keyframes wave1 {
  0% {
    height: 10%;
  }
  33% {
    height: 30%;
  }
  66% {
    height: 15%;
  }
  100% {
    height: 55%;
  }
}
@keyframes wave1 {
  0% {
    height: 10%;
  }
  33% {
    height: 30%;
  }
  66% {
    height: 15%;
  }
  100% {
    height: 55%;
  }
}
@-webkit-keyframes wave2 {
  0% {
    height: 40%;
  }
  33% {
    height: 30%;
  }
  66% {
    height: 40%;
  }
  100% {
    height: 20%;
  }
}
@-moz-keyframes wave2 {
  0% {
    height: 40%;
  }
  33% {
    height: 30%;
  }
  66% {
    height: 40%;
  }
  100% {
    height: 20%;
  }
}
@keyframes wave2 {
  0% {
    height: 40%;
  }
  33% {
    height: 30%;
  }
  66% {
    height: 40%;
  }
  100% {
    height: 20%;
  }
}
@-webkit-keyframes wave3 {
  0% {
    height: 30%;
  }
  33% {
    height: 45%;
  }
  66% {
    height: 30%;
  }
  100% {
    height: 25%;
  }
}
@-moz-keyframes wave3 {
  0% {
    height: 30%;
  }
  33% {
    height: 45%;
  }
  66% {
    height: 30%;
  }
  100% {
    height: 25%;
  }
}
@keyframes wave3 {
  0% {
    height: 30%;
  }
  33% {
    height: 45%;
  }
  66% {
    height: 30%;
  }
  100% {
    height: 25%;
  }
}
@-webkit-keyframes wave4 {
  0% {
    height: 30%;
  }
  33% {
    height: 25%;
  }
  66% {
    height: 40%;
  }
  100% {
    height: 25%;
  }
}
@-moz-keyframes wave4 {
  0% {
    height: 30%;
  }
  33% {
    height: 25%;
  }
  66% {
    height: 40%;
  }
  100% {
    height: 25%;
  }
}
@keyframes wave4 {
  0% {
    height: 30%;
  }
  33% {
    height: 25%;
  }
  66% {
    height: 40%;
  }
  100% {
    height: 25%;
  }
}
@-webkit-keyframes background-scroll {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 0 100%;
  }
}
@-moz-keyframes background-scroll {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 0 100%;
  }
}
@keyframes background-scroll {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 0 100%;
  }
}
#page-toggle-chk:checked ~ .window .top-bar .left-action .line {
  width: 15px;
}
#page-toggle-chk:checked ~ .window .top-bar .left-action .line-1 {
  transform: translateY(3px) rotate(-45deg);
}
#page-toggle-chk:checked ~ .window .top-bar .left-action .line-2 {
  width: 0;
  opacity: 0;
}
#page-toggle-chk:checked ~ .window .top-bar .left-action .line-3 {
  transform: translateY(-3px) rotate(45deg);
}
#page-toggle-chk:checked ~ .window .top-bar .right-action {
  pointer-events: none;
}
#page-toggle-chk:checked ~ .window .top-bar .right-action .line-2 {
  top: 21px;
  right: 25px;
  height: 0;
  width: 0;
  border-left: 6px solid #555;
  border-top: 6px solid transparent;
  border-bottom: 6px solid transparent;
  border-right: 0 solid transparent;
  background: transparent;
}
#page-toggle-chk:checked ~ .window .top-bar .right-action .line-3 {
  position: absolute;
  top: 25px;
  right: 1px;
  height: 12px;
  width: 30px;
  background: #FFF;
  z-index: 1;
}
#page-toggle-chk:checked ~ .window .top-bar .page-front-title {
  opacity: 0;
  transform: scale(0.4);
}
#page-toggle-chk:checked ~ .window .top-bar .page-saved-stations-title {
  opacity: 1;
  transform: none;
}
#page-toggle-chk:checked ~ .window .page-saved-stations {
  opacity: 1;
  pointer-events: auto;
}
#page-toggle-chk:checked ~ .window .page-saved-stations .station-list li {
  opacity: 1;
  transform: none;
  transition-duration: 0.3s;
}
#page-toggle-chk:checked ~ .window .page-saved-stations .station-list li:nth-child(1) {
  transition-delay: 0s;
}
#page-toggle-chk:checked ~ .window .page-saved-stations .station-list li:nth-child(2) {
  transition-delay: 0.05s;
}
#page-toggle-chk:checked ~ .window .page-saved-stations .station-list li:nth-child(3) {
  transition-delay: 0.1s;
}
#page-toggle-chk:checked ~ .window .page-saved-stations .station-list li:nth-child(4) {
  transition-delay: 0.15s;
}
#page-toggle-chk:checked ~ .window .page-saved-stations .station-list li:nth-child(5) {
  transition-delay: 0.2s;
}
#page-toggle-chk:checked ~ .window .page-saved-stations .station-list li:nth-child(6) {
  transition-delay: 0.25s;
}
#page-toggle-chk:checked ~ .window .page-saved-stations .station-list li .num {
  opacity: 1;
  transform: none;
  transition-duration: 0.3s;
  transition-delay: 0.5s;
}
#window-toggle-chk:checked ~ .window {
  transform: translateY(200px);
  opacity: 0;
}
#window-toggle-chk:checked ~ .start-radio-button {
  opacity: 1;
  transform: none;
}
.load-complete .window {
  opacity: 1;
  transform: none;
  height: 460px;
}
.load-complete .window .top-bar {
  opacity: 1;
  transform: none;
}
.load-complete .window .page.page-front .cover {
  height: 250px;
  opacity: 1;
}
.load-complete .window .page.page-front .cover .current-station-text {
  opacity: 1;
}
.load-complete .window .page.page-front .cover .current-station-name-bar {
  opacity: 1;
}
.load-complete .window .page.page-front .cover .glow {
  opacity: 1;
}
.load-complete .window .page.page-front .swipe-bar {
  height: 70px;
  opacity: 1;
}
.load-complete .window .page.page-front .volume-bar {
  opacity: 1;
}
.load-transition {
  transition-duration: 0.5s;
}
.load-transition-delay-1 {
  transition-delay: 0.3s;
}
.load-transition-delay-2 {
  transition-delay: 0.6s;
}

  </style>
  <script>
    /*
 * Ok, i lied. There are like three lines! And I could
 * probably get rid with them if i converted
 * the transitions to animations.
*/
$(document).ready(function() {
    $('html').addClass('load-complete');
});
  </script>
</head>
<body>
 <input id="page-toggle-chk" type="checkbox" style="display: none;"/>
<input id="window-toggle-chk" type="checkbox" style="display: none;"/>
<label class="start-radio-button" for="window-toggle-chk">Start radio</label>
<div class="window load-transition">
  <div class="top-bar load-transition">
    <label class="left-action" for="page-toggle-chk">
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
    </label>
    <div class="mid-text">
      <div class="title page-front-title">Broto Fm</div>
      <div class="title page-saved-stations-title">Alguma coisa aqui</div>
    </div>
    <label class="right-action" for="window-toggle-chk">
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
    </label>
  </div>
  <div class="page page-front">
    <div class="cover load-transition load-transition-delay-1">
      <div class="glow load-transition load-transition-delay-2"></div>
      <marquee id="musica" class="music" direction="left" width="280" class="marqueeT tbl-date">Rádio Broto FM - A origem do sucesso!</marquee>
      <div class="current-station-text load-transition load-transition-delay-2">Broto Fm</div>
      <div class="current-station-name-bar load-transition load-transition-delay-2">
        <div class="left-action fi-rewind"></div>
        <div class="mid-text">104,9 Mhz</div>
        <div class="right-action fi-fast-forward"></div>
      </div>
      <div class="sound-bars">
        <div class="bar wave-1"></div>
        <div class="bar wave-2"></div>
        <div class="bar wave-3"></div>
        <div class="bar wave-4"></div>
        <div class="bar wave-5"></div>
        <div class="bar wave-6"></div>
        <div class="bar wave-7"></div>
        <div class="bar wave-8"></div>
        <div class="bar wave-9"></div>
        <div class="bar wave-10"></div>
        <div class="bar wave-1"></div>
        <div class="bar wave-2"></div>
        <div class="bar wave-3"></div>
        <div class="bar wave-4"></div>
        <div class="bar wave-5"></div>
        <div class="bar wave-6"></div>
        <div class="bar wave-7"></div>
        <div class="bar wave-8"></div>
        <div class="bar wave-9"></div>
        <div class="bar wave-10"></div>
        <div class="bar wave-1"></div>
        <div class="bar wave-2"></div>
        <div class="bar wave-3"></div>
        <div class="bar wave-4"></div>
        <div class="bar wave-5"></div>
        <div class="bar wave-6"></div>
        <div class="bar wave-7"></div>
        <div class="bar wave-8"></div>
        <div class="bar wave-9"></div>
        <div class="bar wave-10"></div>
        <div class="bar wave-1"></div>
        <div class="bar wave-2"></div>
        <div class="bar wave-3"></div>
        <div class="bar wave-4"></div>
        <div class="bar wave-5"></div>
        <div class="bar wave-6"></div>
        <div class="bar wave-7"></div>
        <div class="bar wave-8"></div>
        <div class="bar wave-9"></div>
        <div class="bar wave-10"></div>
        <div class="bar wave-1"></div>
        <div class="bar wave-2"></div>
        <div class="bar wave-3"></div>
        <div class="bar wave-4"></div>
        <div class="bar wave-5"></div>
        <div class="bar wave-6"></div>
        <div class="bar wave-7"></div>
        <div class="bar wave-8"></div>
        <div class="bar wave-9"></div>
        <div class="bar wave-10"></div>
      </div>
    </div>
    <div class="swipe-bar load-transition load-transition-delay-2">
      <div class="range-ruler">
        <div class="point"></div>
        <div class="point"></div>
        <div class="text">90</div>
        <div class="point long"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="text">95</div>
        <div class="point long dot"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point dot"></div>
        <div class="text long">100</div>
        <div class="point long"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="point dot"></div>
        <div class="text long">105</div>
        <div class="point long"></div>
        <div class="point"></div>
        <div class="point dot"></div>
        <div class="point"></div>
        <div class="point"></div>
        <div class="text long">110</div>
        <div class="point long"></div>
        <div class="point dot"></div>
        <div class="point"></div>
        <div class="mid-line"></div>
      </div>
      <input class="range" type="range" value="15" min="1" max="26"/>
    </div>
    <div class="volume-bar load-transition load-transition-delay-2">
      <div class="left-icon fi-volume-none"></div>
      <audio autoplay controls="controls" src="https://ssl.srvstm.com:9786/;">
      <input class="range" type="range" value="100"/></audio>
    </div>
  </div>
  <div class="page page-saved-stations">
    <menu class="station-list">
   <!--   <ul>
        <li><a class="link">Rix FM<span class="num">104.8</span></a></li>
        <li class="active"><a class="link">NRJ radio
            <div class="bar-bouncer">
              <div class="bar bar1"></div>
              <div class="bar bar2"></div>
              <div class="bar bar3"></div>
            </div><span class="num">107.2</span></a></li>
        <li><a class="link">Motreal radio<span class="num">103.5</span></a></li>
        <li> <a class="link">Soul music<span class="num">109.2</span></a></li>
        <li> <a class="link">Rix FM<span class="num">105.9</span></a></li>
        <li> <a class="link">Love radio<span class="num">96.3</span></a></li>
      </ul> -->
    </menu>
  </div>
</div>
<script src="assets/js/api.js" type="text/javascript"></script>
</body>
</html>
