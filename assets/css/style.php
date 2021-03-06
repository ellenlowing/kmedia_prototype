<?php header("Content-type: text/css; charset: UTF-8"); ?>
/*
pt-reg
pt-semi
pt-bold
pt-italic
pt-semi-italic
pt-bold-italic
*/
@font-face {
  font-family: pt-reg;
  src: url('../font/prompt-v4-latin-regular.woff2') format('woff2'),
       url('../font/prompt-v4-latin-regular.woff') format('woff');
  font-weight:  400;
  font-style:   normal;
  font-stretch: normal;
  unicode-range: U+0020-007F;
}
@font-face {
  font-family: pt-semi;
  src: url('../font/prompt-v4-latin-600.woff2') format('woff2'),
       url('../font/prompt-v4-latin-600.woff') format('woff');
  font-weight:  600;
  font-style:   normal;
  font-stretch: normal;
  unicode-range: U+0020-007F;
}
@font-face {
  font-family: pt-bold;
  src: url('../font/prompt-v4-latin-700.woff2') format('woff2'),
       url('../font/prompt-v4-latin-700.woff') format('woff');
  font-weight:  700;
  font-style:   normal;
  font-stretch: normal;
  unicode-range: U+0020-007F;
}
@font-face {
  font-family: pt-italic;
  src: url('../font/prompt-v4-latin-italic.woff2') format('woff2'),
       url('../font/prompt-v4-latin-italic.woff') format('woff');
  font-weight:  400;
  font-style:   italic;
  font-stretch: normal;
  unicode-range: U+0020-007F;
}
@font-face {
  font-family: pt-semi-italic;
  src: url('../font/prompt-v4-latin-600italic.woff2') format('woff2'),
       url('../font/prompt-v4-latin-600italic.woff') format('woff');
  font-weight:  600;
  font-style:   italic;
  font-stretch: normal;
  unicode-range: U+0020-007F;
}
@font-face {
  font-family: pt-bold-italic;
  src: url('../font/prompt-v4-latin-700italic.woff2') format('woff2'),
       url('../font/prompt-v4-latin-700italic.woff') format('woff');
  font-weight:  700;
  font-style:   italic;
  font-stretch: normal;
  unicode-range: U+0020-007F;
}

/*
nt-reg
nt-med
nt-bold
*/
@font-face {
  font-family: nt-reg;
  src: url('../font/NotoSansCJK-Regular.otf') format('opentype');
  font-weight:  400;
  font-style:   normal;
  font-stretch: normal;
  unicode-range: U+4E00-9FFF;
}
@font-face {
  font-family: nt-med;
  src: url('../font/NotoSansCJK-Medium.otf') format('opentype');
  font-weight:  500;
  font-style:   normal;
  font-stretch: normal;
  unicode-range: U+4E00-9FFF;
}
@font-face {
  font-family: nt-bold;
  src: url('../font/NotoSansCJK-Bold.otf') format('opentype');
  font-weight:  700;
  font-style:   normal;
  font-stretch: normal;
  unicode-range: U+4E00-9FFF;
}
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

* {
  outline: none !important;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
}
html, body {
  background-color: #fff;
  color: #000;
  font-family: "pt-reg", "nt-reg", sans-serif;
  height: 100%;
  overflow-x: hidden;
}
main > *:not(.page-video) {
  margin: 0 5vw;
}
main {
  /* animation: fadeIn 0.3s ease-in-out 0s 1 running; */
  margin-bottom: 2.8vw;
}
main.leaving {
  /* animation: fadeOut 1s ease-in-out 0s 1 paused; */
}
img {
  width: 100%;
}
a {
  text-decoration: none;
}
a,
a:visited,
a:active,
a:hover {
  color: #000;
}
a:hover {
  color: #ff1e00;
}
h1 {
  font-family: "pt-bold", sans-serif;
  font-size: 8.33vw;
}
.main-content .nav-container,
.main-info .nav-container,
.main-new-media .nav-container {
  position: relative;
  width: 100%;
  margin-left:0;
  margin-right:0;
}

/**NAV**/
.nav {
  position: relative;
}
.nav-container.exposed {
  margin-top: 0;
}
.nav-container.hidden {
  margin-top: -5.6vw;
}
.nav-container {
  position: fixed;
  top: 0;
  left: 0;
  width: calc(100% - 10vw);
  padding-top: 2.8vw;
  margin-left: 5vw;
  margin-right: 5vw;
  margin-bottom: 4vw;
  -webkit-transition: margin-top 0.8s cubic-bezier(0.86, 0, 0.07, 1);
  -ms-transition: margin-top 0.8s cubic-bezier(0.86, 0, 0.07, 1);
  transition: margin-top 0.8s cubic-bezier(0.86, 0, 0.07, 1);
  z-index: 10;
}
.nav-right {
  float: right;
}
.nav-a {
  color: #000;
  font-family: "pt-semi", sans-serif;
  font-size: 1.5vw;
  padding-left: 3.75vw;
  text-transform: uppercase;
}
.nav-red .nav-a {
  color: #000;
}
.nav-white .nav-a {
  color: #fff;
}
.nav-a.nav-active,
.nav-a:hover {
  color: #ff1e00;
  font-family: "pt-semi-italic", sans-serif;
}
.nav-img {
  width: 2.8vw;
  height: auto;
}
.nav-red #logo-red {
  display: inline-block;
}
.nav-red #logo-white {
  display: none;
}
.nav-white #logo-red {
  display: none;
}
.nav-white #logo-white {
  display: inline-block;
}
.sub-nav-content {
  display: none;
  padding-top: 1.15vw;
  /* padding-left: 1.15vw;
  padding-right: 1.15vw;
  padding-bottom: 0.6vw; */
  position: absolute;
  text-align: center;
  /* right: 19vw; */
  width: 9vw;
  height: fit-content;
}
.nav-red .sub-nav-content {
  /* background-color: #FFF; */
}
.nav-white .sub-nav-content {
  /* background-color: #000; */
}
.sub-nav-content .nav-a {
  display: block;
  font-size: 1.04vw;
  letter-spacing: 0.01em;
  line-height: 1.5;
  padding-left: 0;
  position: relative;
  text-align: center;
  width: 100%;
}
#nav-content:hover + .sub-nav-content,
.sub-nav-content:hover {
  display: block;
}

/**MENUGRID**/
.menugrid-container {
  height: 0;
  padding-top: 75%;
  position: relative;
}
.main-home .menugrid-container
{
  margin-top: 6.25vw;
}
.menugrid {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 50% 7% 43%;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}
.menugrid * {
  color: #fff;
}
.menugrid-item {
  background-size: cover;
  background-position: center;
  background-repeat: repeat;
  position: relative;
}
.menugrid-gradient {
  background-size: cover;
  background-position: center;
  background-repeat: repeat;
  /* background-image: radial-gradient(circle, #ff1e00, #fff); */
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  transition: opacity 0.8s;
}
.menugrid-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 1;
  transition: opacity 0.8s;
  z-index: 2;
}
.menugrid-item:hover .menugrid-gradient {
  opacity: 1;
}
.menugrid-item:hover .menugrid-img {
  opacity: 0;
}
@keyframes gradient1 {
  0% {
    background-size: 100% 100%;
  }
  100% {
    background-size: 500% 500%;
  }
}
@keyframes gradient2 {
  0% {
    background-position: 0 0%;
  }
  50% {
    background-position: 0 50%;
  }
  100% {
    background-position: 0% 100%;
  }
}
@keyframes gradient4 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 50% 0;
  }
  100% {
    background-position: 100% 0;
  }
}
@keyframes gradient5 {
  0% {
    background-size: 500% 500%;
  }
  100% {
    background-size: 100% 100%;
  }
}
#menugrid-1 {
  grid-column: 1 / 2;
  grid-row: 1 / 2;
}
#menugrid-gradient-1 {
  animation: gradient1 2s linear 0s infinite alternate;
  background-image: radial-gradient(circle, #ff1e00, #fff);
}
#menugrid-2 {
  grid-column: 2 / 3;
  grid-row: 1 / 3;
}
#menugrid-gradient-2 {
  background-image: linear-gradient(229deg, #ff1e00, #fff);
  background-size: 200% 200%;
  animation: gradient2 2s linear 0s infinite alternate;
}
#menugrid-3 {
  grid-column: 3 / 4;
  grid-row: 1 / 3;
}
#menugrid-gradient-3 {
  background-image: linear-gradient(350deg, #ff1e00, #fff);
  background-size: 200% 200%;
  animation: gradient2 2s linear 0s infinite alternate;
}
#menugrid-4 {
  grid-column: 1 / 2;
  grid-row: 2 / 4;
}
#menugrid-gradient-4 {
  animation: gradient4 2s linear 0s infinite alternate;
  background-size: 200% 200%;
  background-image: linear-gradient(81deg, #fff, #ff1e00);
}
#menugrid-5 {
  grid-column: 2 / 4;
  grid-row: 3 / 4;
}
#menugrid-gradient-5 {
  animation: gradient5 2s linear 0s infinite alternate;
  background-image: radial-gradient(#ff1e00, #fff);
}
.menugrid-index {
  font-family: "pt-bold", sans-serif;
  font-size: 5.21vw;
  position: absolute;
  top: 1.3vw;
  right: 1.3vw;
  z-index:3;
}
.menugrid-titles {
  display:block;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  width: 100%;
  z-index: 3;
}
.menugrid-titles, .menugrid-date {
  opacity: 0;
  transition: opacity 0.6s;
}
.menugrid-item:hover .menugrid-titles,
.menugrid-item:hover .menugrid-date {
  opacity: 1;
}
.menugrid-title-en {
  font-family: "pt-semi", sans-serif;
  font-size: 3.125vw;
  margin-bottom: 0.833vw
}
.menugrid-title-cn {
  font-family: "nt-bold", sans-serif;
  font-size: 2.1vw;
}
.menugrid-date {
  display: block;
  font-family: "pt-italic", sans-serif;
  font-size: 1.5625vw;
  text-decoration: underline;
  position: absolute;
  left: 50%;
  bottom: 2.27vw;
  text-align: center;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: 100%;
  z-index: 3;
}

/**IFRAME**/
.vid-container {
  position: relative;
}
#vid-wrapper {
  position:relative;
  left: 0;
  top: 0;
  width: 100vw;
  height: 56.25vh;
}
#vid {
  object-fit: cover;
  width: 100vw;
  height: 56.25vh;
  -webkit-appearance: none;
}
#play-btn {
  cursor: grab;
  height: 6vw;
  left: calc(50% - 3vw);
  position: absolute;
  top: calc(50% - 3vw);
  width: 6vw;
  z-index: 3;
}
#pause-btn {
  cursor: grab;
  height: 6vw;
  left: calc(50% - 3vw);
  position: absolute;
  top: calc(50% - 3vw);
  width: 6vw;
  visibility: hidden;
  z-index: 3;
}
#home-video #play-btn,
#home-video #pause-btn {
  display: none;
}
#vid-time {
  position: absolute;
  bottom: 1.3vw;
  left:0;
  font-family: "pt-semi", sans-serif;
  font-size: 3.125vw;
  color: #ff1e00;
  cursor: pointer;
  line-height: 0;
}
#home-video #vid-time,
#content-video #vid-time {
  display: none;
}
#home-video #video-gradient,
#content-video #video-gradient {
  position: absolute;
  left: calc(50% - 15px);
  bottom: calc(-50vw + 15px);
  width: 30px;
  height: 100vw;
  background: transparent linear-gradient(270deg, #FFFFFF 0%, #FFFFFF 20%, #00000000 100%) 0% 0% no-repeat padding-box;
  transform: matrix(0, 1, -1, 0, 0, 0);
  opacity: 1;
  z-index: 3;
}


/**CONTENT**/
.titles h2, .titles h3, .titles h4 {
  color: #000;
  text-transform: uppercase;
}
.titles h2 {
  font-family: "pt-semi", sans-serif;
  font-size: 3.125vw;
  line-height: 120%;
}
.titles h3 {
  font-family: "nt-bold", sans-serif;
  font-size: 2.1vw;
  line-height: 180%;
}
.titles h4 {
  font-family: "pt-semi", sans-serif;
  font-size: 2.1vw;
}
.titles h5 {
  font-family: "nt-bold", sans-serif;
  font-size: 1.3vw;
}
.back-button {
  position: relative;
  margin: 3.33vw 0;
  width: fit-content;
}
.back-button a,
.back-button a:visited,
.back-button a:active,
.back-button a:hover {
  color: #000;
}
.back-button:hover a,
.back-button:hover .back-arrow g > * {
  color: #ff1e00;
  stroke: #ff1e00;
}
.back-arrow {
  height: 1vw;
  width: 1.8vw;
}
.back-arrow g > * {
  stroke: #1a1311;
}
.back-text {
  font-size: 1.6vw;
  font-family: "pt-reg", sans-serif;
}

.content-page {
  display: grid;
  grid-template-columns: 29% auto;
}
.content-page .content-description {
  display: inline-block;
  font-family: "nt-reg", "pt-reg", sans-serif;
  font-size: 1.04vw;
  width: 43.75vw;
  line-height: 1.5625vw;
  padding-top: 0.390625vw;
}
.content-page .content-number {
  color: #ff1e00;
  display: inline-block;
  float: right;
  line-height: 0.9;
}
.content-page .content-header {
  margin-bottom: 6.25vw;
  min-height: 6.25vw;;
}
.content-list {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  column-gap: 2.4vw;
  row-gap: 2.4vw;
}
.content-list {
  font-family: "nt-reg", sans-serif;
  font-size: 0.78125vw;
  text-align: center;
  line-height: 1.2;
}
.content-list b, .content-list strong {
  font-family: "nt-bold", "pt-semi", sans-serif; /*ASK SUK*/
}
.content-list img {
  margin-bottom: 1.35vw;
}
.content-list figcaption > * {
  line-height: 1.5;
}
.main-new-media .content-list {
  display: block;
  margin-left: -40%;
}
/* .main-new-media .content-list img {
  margin-left: -29%;
} */

/**SINGLE**/
.single-page {
  display: grid;
  grid-template-columns: 26% auto;
}
.single-page h4 {
  font-size: 1.5625vw;
  font-family: "pt-semi", sans-serif;
  text-transform: none;
}
.single-page h5 {
  font-size: 1.3vw;
  font-family: "nt-reg", "pt-reg", sans-serif;
}
.single-page p,
.single-description {
  font-family: "nt-reg", "pt-reg", sans-serif;
  font-size: 1.04vw;
  line-height: 1.35;
  padding-right: 5vw;
}
.single-content img {
  margin: 1.5vw 0;
}
.single-title {
  margin-top: 2vw;
}
.single-description {
  margin-top: 1.5vw;
}
/**KTREND**/
.single-ktrend-page p {
  margin-top: 0.46875vw;
  line-height: 1.7;
}
.single-volume-num {
  margin-top: 2.5vw;
}
.single-volume-name {
  margin-bottom: 1.04vw;
}
.single-concept {
  margin-top: 4.6875vw;
  line-height: 1.375;
}


/**ABOUT+CONTACT**/
.infopage {
  display: grid;
  grid-template-columns: 40% 60%;
  height: calc(100vh - 5.6vw - 8vw - 2.3vw);
  position: relative;
  padding-top: 2.3vw;
}
.infopage h2, .infopage h3, .infopage h4 {
  color: #ff1e00;
}
.infopage h2 {
  width: 13.8vw;
}
.infopage h4 {
  bottom: 0;
  position: absolute;
}
.infocontent {
  font-size: 1.3vw;
  line-height: 2vw;
}
.infocontent b,
.infocontent strong {
  font-family: "pt-semi", sans-serif;
}

/**ABOUT ONLY**/
.about .infocontent p {
  margin-bottom: 3.6vw;
}

/**CONTACT ONLY**/
.contact .infocontent {
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.contact .infocontent .contact-column {
  display: grid;
  grid-template-rows: 6vw 6vw 7.2vw 14vw;
  width: 20vw;
}
.contact .infocontent .contact-card-container {
  display: grid;
  grid-template-rows: 1fr 1fr;
}

@media all and (max-width: 768px) {
  /* main {
    margin: 9.07vw 4.8vw;
  } */

}
