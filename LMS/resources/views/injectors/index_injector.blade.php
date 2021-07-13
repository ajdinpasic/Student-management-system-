@extends('layouts.index')

@section('css')

<style>/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
html {
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
main {
  display: block;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}
pre {
  font-family: monospace, monospace;
  font-size: 1em;
}
a {
  background-color: transparent;
}
abbr[title] {
  border-bottom: none;
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
}
b,
strong {
  font-weight: bolder;
}
code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sub {
  bottom: -0.25em;
}
sup {
  top: -0.5em;
}
img {
  border-style: none;
}
button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  margin: 0;
}
button,
input {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
[type='button'],
[type='reset'],
[type='submit'],
button {
  -webkit-appearance: button;
}
[type='button']::-moz-focus-inner,
[type='reset']::-moz-focus-inner,
[type='submit']::-moz-focus-inner,
button::-moz-focus-inner {
  border-style: none;
  padding: 0;
}
[type='button']:-moz-focusring,
[type='reset']:-moz-focusring,
[type='submit']:-moz-focusring,
button:-moz-focusring {
  outline: 1px dotted ButtonText;
}
fieldset {
  padding: 0.35em 0.75em 0.625em;
}
legend {
  box-sizing: border-box;
  color: inherit;
  display: table;
  max-width: 100%;
  padding: 0;
  white-space: normal;
}
progress {
  vertical-align: baseline;
}
textarea {
  overflow: auto;
}
[type='checkbox'],
[type='radio'] {
  box-sizing: border-box;
  padding: 0;
}
[type='number']::-webkit-inner-spin-button,
[type='number']::-webkit-outer-spin-button {
  height: auto;
}
[type='search'] {
  -webkit-appearance: textfield;
  outline-offset: -2px;
}
[type='search']::-webkit-search-decoration {
  -webkit-appearance: none;
}
::-webkit-file-upload-button {
  -webkit-appearance: button;
  font: inherit;
}
details {
  display: block;
}
summary {
  display: list-item;
}
[hidden],
template {
  display: none;
}
blockquote,
dd,
dl,
figure,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
p,
pre {
  margin: 0;
}
button {
  background-color: transparent;
  background-image: none;
  padding: 0;
}
button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}
fieldset,
ol,
ul {
  margin: 0;
  padding: 0;
}
ol,
ul {
  list-style: none;
}
html {
  font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI,
    Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji,
    Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
  line-height: 1.5;
}
*,
:after,
:before {
  box-sizing: border-box;
  border: 0 solid #d5d6d7;
}
hr {
  border-top-width: 1px;
}
img {
  border-style: solid;
}
textarea {
  resize: vertical;
}
input::-moz-placeholder,
textarea::-moz-placeholder {
  color: #a0aec0;
}
input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
  color: #a0aec0;
}
input::-ms-input-placeholder,
textarea::-ms-input-placeholder {
  color: #a0aec0;
}
input::placeholder,
textarea::placeholder {
  color: #a0aec0;
}
[role='button'],
button {
  cursor: pointer;
}
table {
  border-collapse: collapse;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}
a {
  color: inherit;
  text-decoration: inherit;
}
button,
input,
optgroup,
select,
textarea {
  padding: 0;
  line-height: inherit;
  color: inherit;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
}
audio,
canvas,
embed,
iframe,
img,
object,
svg,
video {
  display: block;
  vertical-align: middle;
}
img,
video {
  max-width: 100%;
  height: auto;
}
.container {
  width: 100%;
}
@media (min-width: 640px) {
  .container {
    max-width: 640px;
  }
}
@media (min-width: 768px) {
  .container {
    max-width: 768px;
  }
}
@media (min-width: 1024px) {
  .container {
    max-width: 1024px;
  }
}
@media (min-width: 1280px) {
  .container {
    max-width: 1280px;
  }
}
.form-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: #fff;
  border-color: #e2e8f0;
  border-width: 1px;
  border-radius: 0.25rem;
  padding: 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
}
.form-input::-moz-placeholder {
  color: #9e9e9e;
  opacity: 1;
}
.form-input:-ms-input-placeholder {
  color: #9e9e9e;
  opacity: 1;
}
.form-input::-ms-input-placeholder {
  color: #9e9e9e;
  opacity: 1;
}
.form-input::placeholder {
  color: #9e9e9e;
  opacity: 1;
}
.form-input:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  border-color: #63b3ed;
}
.form-textarea {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: #fff;
  border-color: #e2e8f0;
  border-width: 1px;
  border-radius: 0.25rem;
  padding: 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
}
.form-textarea::-moz-placeholder {
  color: #9e9e9e;
  opacity: 1;
}
.form-textarea:-ms-input-placeholder {
  color: #9e9e9e;
  opacity: 1;
}
.form-textarea::-ms-input-placeholder {
  color: #9e9e9e;
  opacity: 1;
}
.form-textarea::placeholder {
  color: #9e9e9e;
  opacity: 1;
}
.form-textarea:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  border-color: #63b3ed;
}
.form-multiselect {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: #fff;
  border-color: #e2e8f0;
  border-width: 1px;
  border-radius: 0.25rem;
  padding: 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
}
.form-multiselect:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  border-color: #63b3ed;
}
.form-select {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23a0aec0'%3E%3Cpath d='M15.3 9.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z'/%3E%3C/svg%3E");
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-print-color-adjust: exact;
  color-adjust: exact;
  background-repeat: no-repeat;
  background-color: #fff;
  border-color: #e2e8f0;
  border-width: 1px;
  border-radius: 0.25rem;
  padding: 0.5rem 2.5rem 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  background-position: right 0.5rem center;
  background-size: 1.5em 1.5em;
}
.form-select::-ms-expand {
  color: #a0aec0;
  border: none;
}
@media not print {
  .form-select::-ms-expand {
    display: none;
  }
}
@media print and (-ms-high-contrast: active),
  print and (-ms-high-contrast: none) {
  .form-select {
    padding-right: 0.75rem;
  }
}
.form-select:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  border-color: #63b3ed;
}
.form-checkbox {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-print-color-adjust: exact;
  color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  flex-shrink: 0;
  height: 1em;
  width: 1em;
  color: #4299e1;
  background-color: #fff;
  border-color: #e2e8f0;
  border-width: 1px;
  border-radius: 0.25rem;
}
.form-checkbox:checked {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 16 16' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 00-1.414-1.414L7 8.586 5.707 7.293z'/%3E%3C/svg%3E");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: 50%;
  background-repeat: no-repeat;
}
@media not print {
  .form-checkbox::-ms-check {
    border-width: 1px;
    color: transparent;
    background: inherit;
    border-color: inherit;
    border-radius: inherit;
  }
}
.form-checkbox:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  border-color: #63b3ed;
}
.form-radio {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-print-color-adjust: exact;
  color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  flex-shrink: 0;
  border-radius: 100%;
  height: 1em;
  width: 1em;
  color: #4299e1;
  background-color: #fff;
  border-color: #e2e8f0;
  border-width: 1px;
}
.form-radio:checked {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 16 16' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='8' cy='8' r='3'/%3E%3C/svg%3E");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: 50%;
  background-repeat: no-repeat;
}
@media not print {
  .form-radio::-ms-check {
    border-width: 1px;
    color: transparent;
    background: inherit;
    border-color: inherit;
    border-radius: inherit;
  }
}
.form-radio:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
  border-color: #63b3ed;
}
.space-y-2 > :not(template) ~ :not(template) {
  --space-y-reverse: 0;
  margin-top: calc(0.5rem * (1 - var(--space-y-reverse)));
  margin-bottom: calc(0.5rem * var(--space-y-reverse));
}
.space-x-3 > :not(template) ~ :not(template) {
  --space-x-reverse: 0;
  margin-right: calc(0.75rem * var(--space-x-reverse));
  margin-left: calc(0.75rem * (1 - var(--space-x-reverse)));
}
.space-y-4 > :not(template) ~ :not(template) {
  --space-y-reverse: 0;
  margin-top: calc(1rem * (1 - var(--space-y-reverse)));
  margin-bottom: calc(1rem * var(--space-y-reverse));
}
.space-x-4 > :not(template) ~ :not(template) {
  --space-x-reverse: 0;
  margin-right: calc(1rem * var(--space-x-reverse));
  margin-left: calc(1rem * (1 - var(--space-x-reverse)));
}
.space-x-6 > :not(template) ~ :not(template) {
  --space-x-reverse: 0;
  margin-right: calc(1.5rem * var(--space-x-reverse));
  margin-left: calc(1.5rem * (1 - var(--space-x-reverse)));
}
.divide-y > :not(template) ~ :not(template) {
  --divide-y-reverse: 0;
  border-top-width: calc(1px * (1 - var(--divide-y-reverse)));
  border-bottom-width: calc(1px * var(--divide-y-reverse));
}
.theme-dark .dark\:divide-gray-700 > :not(template) ~ :not(template) {
  --divide-opacity: 1;
  border-color: #24262d;
  border-color: rgba(36, 38, 45, var(--divide-opacity));
}
.bg-white {
  --bg-opacity: 1;
  background-color: #fff;
  background-color: rgba(255, 255, 255, var(--bg-opacity));
}
.bg-black {
  --bg-opacity: 1;
  background-color: #000;
  background-color: rgba(0, 0, 0, var(--bg-opacity));
}
.bg-gray-50 {
  --bg-opacity: 1;
  background-color: #f9fafb;
  background-color: rgba(249, 250, 251, var(--bg-opacity));
}
.bg-gray-100 {
  --bg-opacity: 1;
  background-color: #f4f5f7;
  background-color: rgba(244, 245, 247, var(--bg-opacity));
}
.bg-red-100 {
  --bg-opacity: 1;
  background-color: #fde8e8;
  background-color: rgba(253, 232, 232, var(--bg-opacity));
}
.bg-red-600 {
  --bg-opacity: 1;
  background-color: #e02424;
  background-color: rgba(224, 36, 36, var(--bg-opacity));
}
.bg-orange-100 {
  --bg-opacity: 1;
  background-color: #feecdc;
  background-color: rgba(254, 236, 220, var(--bg-opacity));
}
.bg-green-100 {
  --bg-opacity: 1;
  background-color: #def7ec;
  background-color: rgba(222, 247, 236, var(--bg-opacity));
}
.bg-teal-100 {
  --bg-opacity: 1;
  background-color: #d5f5f6;
  background-color: rgba(213, 245, 246, var(--bg-opacity));
}
.bg-teal-500 {
  --bg-opacity: 1;
  background-color: #0694a2;
  background-color: rgba(6, 148, 162, var(--bg-opacity));
}
.bg-teal-600 {
  --bg-opacity: 1;
  background-color: #047481;
  background-color: rgba(4, 116, 129, var(--bg-opacity));
}
.bg-blue-100 {
  --bg-opacity: 1;
  background-color: #e1effe;
  background-color: rgba(225, 239, 254, var(--bg-opacity));
}
.bg-blue-500 {
  --bg-opacity: 1;
  background-color: #3f83f8;
  background-color: rgba(63, 131, 248, var(--bg-opacity));
}
.bg-blue-600 {
  --bg-opacity: 1;
  background-color: #1c64f2;
  background-color: rgba(28, 100, 242, var(--bg-opacity));
}
.bg-purple-600 {
  --bg-opacity: 1;
  background-color: #7e3af2;
  background-color: rgba(126, 58, 242, var(--bg-opacity));
}
.hover\:bg-gray-100:hover {
  --bg-opacity: 1;
  background-color: #f4f5f7;
  background-color: rgba(244, 245, 247, var(--bg-opacity));
}
.hover\:bg-purple-700:hover {
  --bg-opacity: 1;
  background-color: #6c2bd9;
  background-color: rgba(108, 43, 217, var(--bg-opacity));
}
.focus\:bg-white:focus {
  --bg-opacity: 1;
  background-color: #fff;
  background-color: rgba(255, 255, 255, var(--bg-opacity));
}
.active\:bg-transparent:active {
  background-color: transparent;
}
.active\:bg-purple-600:active {
  --bg-opacity: 1;
  background-color: #7e3af2;
  background-color: rgba(126, 58, 242, var(--bg-opacity));
}
.theme-dark .dark\:bg-gray-700 {
  --bg-opacity: 1;
  background-color: #24262d;
  background-color: rgba(36, 38, 45, var(--bg-opacity));
}
.theme-dark .dark\:bg-gray-800 {
  --bg-opacity: 1;
  background-color: #1a1c23;
  background-color: rgba(26, 28, 35, var(--bg-opacity));
}
.theme-dark .dark\:bg-gray-900 {
  --bg-opacity: 1;
  background-color: #121317;
  background-color: rgba(18, 19, 23, var(--bg-opacity));
}
.theme-dark .dark\:bg-red-600 {
  --bg-opacity: 1;
  background-color: #e02424;
  background-color: rgba(224, 36, 36, var(--bg-opacity));
}
.theme-dark .dark\:bg-red-700 {
  --bg-opacity: 1;
  background-color: #c81e1e;
  background-color: rgba(200, 30, 30, var(--bg-opacity));
}
.theme-dark .dark\:bg-orange-500 {
  --bg-opacity: 1;
  background-color: #ff5a1f;
  background-color: rgba(255, 90, 31, var(--bg-opacity));
}
.theme-dark .dark\:bg-orange-600 {
  --bg-opacity: 1;
  background-color: #d03801;
  background-color: rgba(208, 56, 1, var(--bg-opacity));
}
.theme-dark .dark\:bg-green-500 {
  --bg-opacity: 1;
  background-color: #0e9f6e;
  background-color: rgba(14, 159, 110, var(--bg-opacity));
}
.theme-dark .dark\:bg-green-700 {
  --bg-opacity: 1;
  background-color: #046c4e;
  background-color: rgba(4, 108, 78, var(--bg-opacity));
}
.theme-dark .dark\:bg-teal-500 {
  --bg-opacity: 1;
  background-color: #0694a2;
  background-color: rgba(6, 148, 162, var(--bg-opacity));
}
.theme-dark .dark\:bg-blue-500 {
  --bg-opacity: 1;
  background-color: #3f83f8;
  background-color: rgba(63, 131, 248, var(--bg-opacity));
}
.theme-dark .dark\:hover\:bg-gray-800:hover {
  --bg-opacity: 1;
  background-color: #1a1c23;
  background-color: rgba(26, 28, 35, var(--bg-opacity));
}
.bg-opacity-50 {
  --bg-opacity: 0.5;
}
.border-transparent {
  border-color: transparent;
}
.border-white {
  --border-opacity: 1;
  border-color: #fff;
  border-color: rgba(255, 255, 255, var(--border-opacity));
}
.border-gray-100 {
  --border-opacity: 1;
  border-color: #f4f5f7;
  border-color: rgba(244, 245, 247, var(--border-opacity));
}
.border-gray-300 {
  --border-opacity: 1;
  border-color: #d5d6d7;
  border-color: rgba(213, 214, 215, var(--border-opacity));
}
.border-red-600 {
  --border-opacity: 1;
  border-color: #e02424;
  border-color: rgba(224, 36, 36, var(--border-opacity));
}
.border-green-600 {
  --border-opacity: 1;
  border-color: #057a55;
  border-color: rgba(5, 122, 85, var(--border-opacity));
}
.border-purple-600 {
  --border-opacity: 1;
  border-color: #7e3af2;
  border-color: rgba(126, 58, 242, var(--border-opacity));
}
.focus\:border-gray-500:focus {
  --border-opacity: 1;
  border-color: #707275;
  border-color: rgba(112, 114, 117, var(--border-opacity));
}
.focus\:border-red-400:focus {
  --border-opacity: 1;
  border-color: #f98080;
  border-color: rgba(249, 128, 128, var(--border-opacity));
}
.focus\:border-green-400:focus {
  --border-opacity: 1;
  border-color: #31c48d;
  border-color: rgba(49, 196, 141, var(--border-opacity));
}
.focus\:border-purple-300:focus {
  --border-opacity: 1;
  border-color: #cabffd;
  border-color: rgba(202, 191, 253, var(--border-opacity));
}
.focus\:border-purple-400:focus {
  --border-opacity: 1;
  border-color: #ac94fa;
  border-color: rgba(172, 148, 250, var(--border-opacity));
}
.hover\:border-gray-500:hover {
  --border-opacity: 1;
  border-color: #707275;
  border-color: rgba(112, 114, 117, var(--border-opacity));
}
.theme-dark .dark\:border-gray-600 {
  --border-opacity: 1;
  border-color: #4c4f52;
  border-color: rgba(76, 79, 82, var(--border-opacity));
}
.theme-dark .dark\:border-gray-700 {
  --border-opacity: 1;
  border-color: #24262d;
  border-color: rgba(36, 38, 45, var(--border-opacity));
}
.theme-dark .dark\:border-gray-800 {
  --border-opacity: 1;
  border-color: #1a1c23;
  border-color: rgba(26, 28, 35, var(--border-opacity));
}
.rounded {
  border-radius: 0.25rem;
}
.rounded-md {
  border-radius: 0.375rem;
}
.rounded-lg {
  border-radius: 0.5rem;
}
.rounded-full {
  border-radius: 9999px;
}
.rounded-r-md {
  border-top-right-radius: 0.375rem;
  border-bottom-right-radius: 0.375rem;
}
.rounded-l-md {
  border-top-left-radius: 0.375rem;
  border-bottom-left-radius: 0.375rem;
}
.rounded-t-lg {
  border-top-left-radius: 0.5rem;
}
.rounded-r-lg,
.rounded-t-lg {
  border-top-right-radius: 0.5rem;
}
.rounded-r-lg {
  border-bottom-right-radius: 0.5rem;
}
.rounded-l-lg {
  border-top-left-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
}
.rounded-tr-lg {
  border-top-right-radius: 0.5rem;
}
.rounded-br-lg {
  border-bottom-right-radius: 0.5rem;
}
.border-0 {
  border-width: 0;
}
.border-2 {
  border-width: 2px;
}
.border {
  border-width: 1px;
}
.border-r-0 {
  border-right-width: 0;
}
.border-t {
  border-top-width: 1px;
}
.border-b {
  border-bottom-width: 1px;
}
.cursor-not-allowed {
  cursor: not-allowed;
}
.block {
  display: block;
}
.inline-block {
  display: inline-block;
}
.flex {
  display: flex;
}
.inline-flex {
  display: inline-flex;
}
.table {
  display: table;
}
.grid {
  display: grid;
}
.hidden {
  display: none;
}
.theme-dark .dark\:block {
  display: block;
}
.theme-dark .dark\:hidden {
  display: none;
}
.flex-col {
  flex-direction: column;
}
.flex-wrap {
  flex-wrap: wrap;
}
.items-end {
  align-items: flex-end;
}
.items-center {
  align-items: center;
}
.justify-end {
  justify-content: flex-end;
}
.justify-center {
  justify-content: center;
}
.justify-between {
  justify-content: space-between;
}
.flex-1 {
  flex: 1 1 0%;
}
.flex-shrink-0 {
  flex-shrink: 0;
}
.font-medium {
  font-weight: 500;
}
.font-semibold {
  font-weight: 600;
}
.font-bold {
  font-weight: 700;
}
.h-3 {
  height: 0.75rem;
}
.h-4 {
  height: 1rem;
}
.h-5 {
  height: 1.25rem;
}
.h-6 {
  height: 1.5rem;
}
.h-8 {
  height: 2rem;
}
.h-12 {
  height: 3rem;
}
.h-32 {
  height: 8rem;
}
.h-full {
  height: 100%;
}
.h-screen {
  height: 100vh;
}
.text-xs {
  font-size: 0.75rem;
}
.text-sm {
  font-size: 0.875rem;
}
.text-lg {
  font-size: 1.125rem;
}
.text-xl {
  font-size: 1.25rem;
}
.text-2xl {
  font-size: 1.5rem;
}
.text-6xl {
  font-size: 4rem;
}
.leading-5 {
  line-height: 1.25rem;
}
.leading-none {
  line-height: 1;
}
.leading-tight {
  line-height: 1.25;
}
.my-6 {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}
.my-8 {
  margin-top: 2rem;
  margin-bottom: 2rem;
}
.mx-auto {
  margin-left: auto;
  margin-right: auto;
}
.-mx-6 {
  margin-left: -1.5rem;
  margin-right: -1.5rem;
}
.mt-1 {
  margin-top: 0.25rem;
}
.mr-1 {
  margin-right: 0.25rem;
}
.mt-2 {
  margin-top: 0.5rem;
}
.mr-2 {
  margin-right: 0.5rem;
}
.mb-2 {
  margin-bottom: 0.5rem;
}
.ml-2 {
  margin-left: 0.5rem;
}
.mr-3 {
  margin-right: 0.75rem;
}
.ml-3 {
  margin-left: 0.75rem;
}
.mt-4 {
  margin-top: 1rem;
}
.mr-4 {
  margin-right: 1rem;
}
.mb-4 {
  margin-bottom: 1rem;
}
.ml-4 {
  margin-left: 1rem;
}
.mr-5 {
  margin-right: 1.25rem;
}
.mt-6 {
  margin-top: 1.5rem;
}
.mr-6 {
  margin-right: 1.5rem;
}
.mb-6 {
  margin-bottom: 1.5rem;
}
.ml-6 {
  margin-left: 1.5rem;
}
.mt-8 {
  margin-top: 2rem;
}
.mb-8 {
  margin-bottom: 2rem;
}
.mt-16 {
  margin-top: 4rem;
}
.-mr-1 {
  margin-right: -0.25rem;
}
.-ml-1 {
  margin-left: -0.25rem;
}
.-mb-4 {
  margin-bottom: -1rem;
}
.max-h-0 {
  max-height: 0;
}
.max-h-xl {
  max-height: 36rem;
}
.max-w-xl {
  max-width: 36rem;
}
.max-w-2xl {
  max-width: 42rem;
}
.max-w-4xl {
  max-width: 56rem;
}
.min-h-screen {
  min-height: 100vh;
}
.min-w-0 {
  min-width: 0;
}
.object-cover {
  -o-object-fit: cover;
  object-fit: cover;
}
.opacity-0 {
  opacity: 0;
}
.opacity-25 {
  opacity: 0.25;
}
.opacity-50 {
  opacity: 0.5;
}
.opacity-100 {
  opacity: 1;
}
.focus\:outline-none:focus {
  outline: 0;
}
.overflow-hidden {
  overflow: hidden;
}
.overflow-x-auto {
  overflow-x: auto;
}
.overflow-y-auto {
  overflow-y: auto;
}
.p-1 {
  padding: 0.25rem;
}
.p-2 {
  padding: 0.5rem;
}
.p-3 {
  padding: 0.75rem;
}
.p-4 {
  padding: 1rem;
}
.p-6 {
  padding: 1.5rem;
}
.py-1 {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}
.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.px-2 {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}
.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}
.px-3 {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}
.py-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}
.px-5 {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}
.px-6 {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}
.px-10 {
  padding-left: 2.5rem;
  padding-right: 2.5rem;
}
.pr-2 {
  padding-right: 0.5rem;
}
.pl-2 {
  padding-left: 0.5rem;
}
.pl-8 {
  padding-left: 2rem;
}
.pr-10 {
  padding-right: 2.5rem;
}
.pl-10 {
  padding-left: 2.5rem;
}
.pb-16 {
  padding-bottom: 4rem;
}
.pr-20 {
  padding-right: 5rem;
}
.pl-20 {
  padding-left: 5rem;
}
.placeholder-gray-600::-moz-placeholder {
  --placeholder-opacity: 1;
  color: #4c4f52;
  color: rgba(76, 79, 82, var(--placeholder-opacity));
}
.placeholder-gray-600:-ms-input-placeholder {
  --placeholder-opacity: 1;
  color: #4c4f52;
  color: rgba(76, 79, 82, var(--placeholder-opacity));
}
.placeholder-gray-600::-ms-input-placeholder {
  --placeholder-opacity: 1;
  color: #4c4f52;
  color: rgba(76, 79, 82, var(--placeholder-opacity));
}
.placeholder-gray-600::placeholder {
  --placeholder-opacity: 1;
  color: #4c4f52;
  color: rgba(76, 79, 82, var(--placeholder-opacity));
}
.focus\:placeholder-gray-500:focus::-moz-placeholder {
  --placeholder-opacity: 1;
  color: #707275;
  color: rgba(112, 114, 117, var(--placeholder-opacity));
}
.focus\:placeholder-gray-500:focus:-ms-input-placeholder {
  --placeholder-opacity: 1;
  color: #707275;
  color: rgba(112, 114, 117, var(--placeholder-opacity));
}
.focus\:placeholder-gray-500:focus::-ms-input-placeholder {
  --placeholder-opacity: 1;
  color: #707275;
  color: rgba(112, 114, 117, var(--placeholder-opacity));
}
.focus\:placeholder-gray-500:focus::placeholder {
  --placeholder-opacity: 1;
  color: #707275;
  color: rgba(112, 114, 117, var(--placeholder-opacity));
}
.theme-dark .dark\:placeholder-gray-500::-moz-placeholder {
  --placeholder-opacity: 1;
  color: #707275;
  color: rgba(112, 114, 117, var(--placeholder-opacity));
}
.theme-dark .dark\:placeholder-gray-500:-ms-input-placeholder {
  --placeholder-opacity: 1;
  color: #707275;
  color: rgba(112, 114, 117, var(--placeholder-opacity));
}
.theme-dark .dark\:placeholder-gray-500::-ms-input-placeholder {
  --placeholder-opacity: 1;
  color: #707275;
  color: rgba(112, 114, 117, var(--placeholder-opacity));
}
.theme-dark .dark\:placeholder-gray-500::placeholder {
  --placeholder-opacity: 1;
  color: #707275;
  color: rgba(112, 114, 117, var(--placeholder-opacity));
}
.theme-dark .dark\:focus\:placeholder-gray-600:focus::-moz-placeholder {
  --placeholder-opacity: 1;
  color: #4c4f52;
  color: rgba(76, 79, 82, var(--placeholder-opacity));
}
.theme-dark .dark\:focus\:placeholder-gray-600:focus:-ms-input-placeholder {
  --placeholder-opacity: 1;
  color: #4c4f52;
  color: rgba(76, 79, 82, var(--placeholder-opacity));
}
.theme-dark .dark\:focus\:placeholder-gray-600:focus::-ms-input-placeholder {
  --placeholder-opacity: 1;
  color: #4c4f52;
  color: rgba(76, 79, 82, var(--placeholder-opacity));
}
.theme-dark .dark\:focus\:placeholder-gray-600:focus::placeholder {
  --placeholder-opacity: 1;
  color: #4c4f52;
  color: rgba(76, 79, 82, var(--placeholder-opacity));
}
.pointer-events-none {
  pointer-events: none;
}
.fixed {
  position: fixed;
}
.absolute {
  position: absolute;
}
.relative {
  position: relative;
}
.inset-0 {
  right: 0;
  left: 0;
}
.inset-0,
.inset-y-0 {
  top: 0;
  bottom: 0;
}
.top-0 {
  top: 0;
}
.right-0 {
  right: 0;
}
.left-0 {
  left: 0;
}
.shadow-xs {
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05);
}
.shadow {
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}
.shadow-md {
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
    0 2px 4px -1px rgba(0, 0, 0, 0.06);
}
.shadow-xl {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
    0 10px 10px -5px rgba(0, 0, 0, 0.04);
}
.shadow-inner {
  box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.06);
}
.fill-current {
  fill: currentColor;
}
.text-left {
  text-align: left;
}
.text-center {
  text-align: center;
}
.text-white {
  --text-opacity: 1;
  color: #fff;
  color: rgba(255, 255, 255, var(--text-opacity));
}
.text-black {
  --text-opacity: 1;
  color: #000;
  color: rgba(0, 0, 0, var(--text-opacity));
}
.text-gray-400 {
  --text-opacity: 1;
  color: #9e9e9e;
  color: rgba(158, 158, 158, var(--text-opacity));
}
.text-gray-500 {
  --text-opacity: 1;
  color: #707275;
  color: rgba(112, 114, 117, var(--text-opacity));
}
.text-gray-600 {
  --text-opacity: 1;
  color: #4c4f52;
  color: rgba(76, 79, 82, var(--text-opacity));
}
.text-gray-700 {
  --text-opacity: 1;
  color: #24262d;
  color: rgba(36, 38, 45, var(--text-opacity));
}
.text-gray-800 {
  --text-opacity: 1;
  color: #1a1c23;
  color: rgba(26, 28, 35, var(--text-opacity));
}
.text-red-600 {
  --text-opacity: 1;
  color: #e02424;
  color: rgba(224, 36, 36, var(--text-opacity));
}
.text-red-700 {
  --text-opacity: 1;
  color: #c81e1e;
  color: rgba(200, 30, 30, var(--text-opacity));
}
.text-orange-500 {
  --text-opacity: 1;
  color: #ff5a1f;
  color: rgba(255, 90, 31, var(--text-opacity));
}
.text-orange-700 {
  --text-opacity: 1;
  color: #b43403;
  color: rgba(180, 52, 3, var(--text-opacity));
}
.text-green-500 {
  --text-opacity: 1;
  color: #0e9f6e;
  color: rgba(14, 159, 110, var(--text-opacity));
}
.text-green-600 {
  --text-opacity: 1;
  color: #057a55;
  color: rgba(5, 122, 85, var(--text-opacity));
}
.text-green-700 {
  --text-opacity: 1;
  color: #046c4e;
  color: rgba(4, 108, 78, var(--text-opacity));
}
.text-teal-500 {
  --text-opacity: 1;
  color: #0694a2;
  color: rgba(6, 148, 162, var(--text-opacity));
}
.text-blue-500 {
  --text-opacity: 1;
  color: #3f83f8;
  color: rgba(63, 131, 248, var(--text-opacity));
}
.text-purple-100 {
  --text-opacity: 1;
  color: #edebfe;
  color: rgba(237, 235, 254, var(--text-opacity));
}
.text-purple-200 {
  --text-opacity: 1;
  color: #dcd7fe;
  color: rgba(220, 215, 254, var(--text-opacity));
}
.text-purple-600 {
  --text-opacity: 1;
  color: #7e3af2;
  color: rgba(126, 58, 242, var(--text-opacity));
}
.focus-within\:text-purple-500:focus-within {
  --text-opacity: 1;
  color: #9061f9;
  color: rgba(144, 97, 249, var(--text-opacity));
}
.focus-within\:text-purple-600:focus-within {
  --text-opacity: 1;
  color: #7e3af2;
  color: rgba(126, 58, 242, var(--text-opacity));
}
.hover\:text-gray-700:hover {
  --text-opacity: 1;
  color: #24262d;
  color: rgba(36, 38, 45, var(--text-opacity));
}
.hover\:text-gray-800:hover {
  --text-opacity: 1;
  color: #1a1c23;
  color: rgba(26, 28, 35, var(--text-opacity));
}
.active\:text-gray-500:active {
  --text-opacity: 1;
  color: #707275;
  color: rgba(112, 114, 117, var(--text-opacity));
}
.theme-dark .dark\:text-white {
  --text-opacity: 1;
  color: #fff;
  color: rgba(255, 255, 255, var(--text-opacity));
}
.theme-dark .dark\:text-gray-100 {
  --text-opacity: 1;
  color: #f4f5f7;
  color: rgba(244, 245, 247, var(--text-opacity));
}
.theme-dark .dark\:text-gray-200 {
  --text-opacity: 1;
  color: #e5e7eb;
  color: rgba(229, 231, 235, var(--text-opacity));
}
.theme-dark .dark\:text-gray-300 {
  --text-opacity: 1;
  color: #d5d6d7;
  color: rgba(213, 214, 215, var(--text-opacity));
}
.theme-dark .dark\:text-gray-400 {
  --text-opacity: 1;
  color: #9e9e9e;
  color: rgba(158, 158, 158, var(--text-opacity));
}
.theme-dark .dark\:text-red-100 {
  --text-opacity: 1;
  color: #fde8e8;
  color: rgba(253, 232, 232, var(--text-opacity));
}
.theme-dark .dark\:text-red-400 {
  --text-opacity: 1;
  color: #f98080;
  color: rgba(249, 128, 128, var(--text-opacity));
}
.theme-dark .dark\:text-orange-100 {
  --text-opacity: 1;
  color: #feecdc;
  color: rgba(254, 236, 220, var(--text-opacity));
}
.theme-dark .dark\:text-green-100 {
  --text-opacity: 1;
  color: #def7ec;
  color: rgba(222, 247, 236, var(--text-opacity));
}
.theme-dark .dark\:text-green-400 {
  --text-opacity: 1;
  color: #31c48d;
  color: rgba(49, 196, 141, var(--text-opacity));
}
.theme-dark .dark\:text-teal-100 {
  --text-opacity: 1;
  color: #d5f5f6;
  color: rgba(213, 245, 246, var(--text-opacity));
}
.theme-dark .dark\:text-blue-100 {
  --text-opacity: 1;
  color: #e1effe;
  color: rgba(225, 239, 254, var(--text-opacity));
}
.theme-dark .dark\:text-purple-300 {
  --text-opacity: 1;
  color: #cabffd;
  color: rgba(202, 191, 253, var(--text-opacity));
}
.theme-dark .dark\:text-purple-400 {
  --text-opacity: 1;
  color: #ac94fa;
  color: rgba(172, 148, 250, var(--text-opacity));
}
.theme-dark .dark\:focus-within\:text-purple-400:focus-within {
  --text-opacity: 1;
  color: #ac94fa;
  color: rgba(172, 148, 250, var(--text-opacity));
}
.theme-dark .dark\:hover\:text-gray-200:hover {
  --text-opacity: 1;
  color: #e5e7eb;
  color: rgba(229, 231, 235, var(--text-opacity));
}
.uppercase {
  text-transform: uppercase;
}
.hover\:underline:hover,
.underline {
  text-decoration: underline;
}
.tracking-wide {
  letter-spacing: 0.025em;
}
.align-middle {
  vertical-align: middle;
}
.whitespace-no-wrap {
  white-space: nowrap;
}
.w-1 {
  width: 0.25rem;
}
.w-3 {
  width: 0.75rem;
}
.w-4 {
  width: 1rem;
}
.w-5 {
  width: 1.25rem;
}
.w-6 {
  width: 1.5rem;
}
.w-8 {
  width: 2rem;
}
.w-12 {
  width: 3rem;
}
.w-56 {
  width: 14rem;
}
.w-64 {
  width: 16rem;
}
.w-full {
  width: 100%;
}
.z-10 {
  z-index: 10;
}
.z-20 {
  z-index: 20;
}
.z-30 {
  z-index: 30;
}
.gap-6 {
  grid-gap: 1.5rem;
  gap: 1.5rem;
}
.col-span-2 {
  grid-column: span 2 / span 2;
}
.col-span-3 {
  grid-column: span 3 / span 3;
}
.col-span-4 {
  grid-column: span 4 / span 4;
}
.transform {
  --transform-translate-x: 0;
  --transform-translate-y: 0;
  --transform-rotate: 0;
  --transform-skew-x: 0;
  --transform-skew-y: 0;
  --transform-scale-x: 1;
  --transform-scale-y: 1;
  transform: translateX(var(--transform-translate-x))
    translateY(var(--transform-translate-y)) rotate(var(--transform-rotate))
    skewX(var(--transform-skew-x)) skewY(var(--transform-skew-y))
    scaleX(var(--transform-scale-x)) scaleY(var(--transform-scale-y));
}
.translate-x-1 {
  --transform-translate-x: 0.25rem;
}
.-translate-x-20 {
  --transform-translate-x: -5rem;
}
.-translate-y-1 {
  --transform-translate-y: -0.25rem;
}
.translate-y-1\/2 {
  --transform-translate-y: 50%;
}
.transition-all {
  transition-property: all;
}
.transition {
  transition-property: background-color, border-color, color, fill, stroke,
    opacity, box-shadow, transform;
}
.transition-colors {
  transition-property: background-color, border-color, color, fill, stroke;
}
.ease-in {
  transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
}
.ease-out {
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
}
.ease-in-out {
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
.duration-150 {
  transition-duration: 0.15s;
}
.duration-300 {
  transition-duration: 0.3s;
}
.focus\:shadow-outline-gray:focus {
  box-shadow: 0 0 0 3px rgba(213, 214, 215, 0.45);
}
.focus\:shadow-outline-red:focus {
  box-shadow: 0 0 0 3px rgba(248, 180, 180, 0.45);
}
.focus\:shadow-outline-green:focus {
  box-shadow: 0 0 0 3px rgba(132, 225, 188, 0.45);
}
.focus\:shadow-outline-purple:focus {
  box-shadow: 0 0 0 3px rgba(202, 191, 253, 0.45);
}
.theme-dark .dark\:focus\:shadow-outline-gray:focus {
  box-shadow: 0 0 0 3px rgba(213, 214, 215, 0.45);
}
@media (min-width: 640px) {
  .sm\:space-y-0 > :not(template) ~ :not(template) {
    --space-y-reverse: 0;
    margin-top: calc(0px * (1 - var(--space-y-reverse)));
    margin-bottom: calc(0px * var(--space-y-reverse));
  }
  .sm\:space-x-6 > :not(template) ~ :not(template) {
    --space-x-reverse: 0;
    margin-right: calc(1.5rem * var(--space-x-reverse));
    margin-left: calc(1.5rem * (1 - var(--space-x-reverse)));
  }
  .sm\:rounded-lg {
    border-radius: 0.5rem;
  }
  .sm\:flex-row {
    flex-direction: row;
  }
  .sm\:items-center {
    align-items: center;
  }
  .sm\:justify-end {
    justify-content: flex-end;
  }
  .sm\:justify-center {
    justify-content: center;
  }
  .sm\:m-4 {
    margin: 1rem;
  }
  .sm\:mt-auto {
    margin-top: auto;
  }
  .sm\:max-w-xl {
    max-width: 36rem;
  }
  .sm\:p-12 {
    padding: 3rem;
  }
  .sm\:py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }
  .sm\:px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }
  .sm\:w-auto {
    width: auto;
  }
  .sm\:grid-cols-9 {
    grid-template-columns: repeat(9, minmax(0, 1fr));
  }
}
@media (min-width: 768px) {
  .md\:space-x-4 > :not(template) ~ :not(template) {
    --space-x-reverse: 0;
    margin-right: calc(1rem * var(--space-x-reverse));
    margin-left: calc(1rem * (1 - var(--space-x-reverse)));
  }
  .md\:block {
    display: block;
  }
  .md\:hidden {
    display: none;
  }
  .md\:flex-row {
    flex-direction: row;
  }
  .md\:items-end {
    align-items: flex-end;
  }
  .md\:h-auto {
    height: auto;
  }
  .md\:w-1\/2 {
    width: 50%;
  }
  .md\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}
@media (min-width: 1024px) {
  .lg\:mr-32 {
    margin-right: 8rem;
  }
}
@media (min-width: 1280px) {
  .xl\:grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }
}
</style>

@endsection


@section('js1')

function data() {
  function getThemeFromLocalStorage() {
    // if user already changed the theme, use it
    if (window.localStorage.getItem('dark')) {
      return JSON.parse(window.localStorage.getItem('dark'))
    }

    // else return their preferences
    return (
      !!window.matchMedia &&
      window.matchMedia('(prefers-color-scheme: dark)').matches
    )
  }

  function setThemeToLocalStorage(value) {
    window.localStorage.setItem('dark', value)
  }

  return {
    dark: getThemeFromLocalStorage(),
    toggleTheme() {
      this.dark = !this.dark
      setThemeToLocalStorage(this.dark)
    },
    isSideMenuOpen: false,
    toggleSideMenu() {
      this.isSideMenuOpen = !this.isSideMenuOpen
    },
    closeSideMenu() {
      this.isSideMenuOpen = false
    },
    isNotificationsMenuOpen: false,
    toggleNotificationsMenu() {
      this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
    },
    closeNotificationsMenu() {
      this.isNotificationsMenuOpen = false
    },
    isProfileMenuOpen: false,
    toggleProfileMenu() {
      this.isProfileMenuOpen = !this.isProfileMenuOpen
    },
    closeProfileMenu() {
      this.isProfileMenuOpen = false
    },
    isPagesMenuOpen: false,
    togglePagesMenu() {
      this.isPagesMenuOpen = !this.isPagesMenuOpen
    },
    // Modal
    isModalOpen: false,
    trapCleanup: null,
    openModal() {
      this.isModalOpen = true
      this.trapCleanup = focusTrap(document.querySelector('#modal'))
    },
    closeModal() {
      this.isModalOpen = false
      this.trapCleanup()
    },
  }
}


@endsection

@section('js1')

function data() {
  function getThemeFromLocalStorage() {
    // if user already changed the theme, use it
    if (window.localStorage.getItem('dark')) {
      return JSON.parse(window.localStorage.getItem('dark'))
    }

    // else return their preferences
    return (
      !!window.matchMedia &&
      window.matchMedia('(prefers-color-scheme: dark)').matches
    )
  }

  function setThemeToLocalStorage(value) {
    window.localStorage.setItem('dark', value)
  }

  return {
    dark: getThemeFromLocalStorage(),
    toggleTheme() {
      this.dark = !this.dark
      setThemeToLocalStorage(this.dark)
    },
    isSideMenuOpen: false,
    toggleSideMenu() {
      this.isSideMenuOpen = !this.isSideMenuOpen
    },
    closeSideMenu() {
      this.isSideMenuOpen = false
    },
    isNotificationsMenuOpen: false,
    toggleNotificationsMenu() {
      this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
    },
    closeNotificationsMenu() {
      this.isNotificationsMenuOpen = false
    },
    isProfileMenuOpen: false,
    toggleProfileMenu() {
      this.isProfileMenuOpen = !this.isProfileMenuOpen
    },
    closeProfileMenu() {
      this.isProfileMenuOpen = false
    },
    isPagesMenuOpen: false,
    togglePagesMenu() {
      this.isPagesMenuOpen = !this.isPagesMenuOpen
    },
    // Modal
    isModalOpen: false,
    trapCleanup: null,
    openModal() {
      this.isModalOpen = true
      this.trapCleanup = focusTrap(document.querySelector('#modal'))
    },
    closeModal() {
      this.isModalOpen = false
      this.trapCleanup()
    },
  }
}

@endsection




