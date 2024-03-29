<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <title>Document</title>
</head>

<body>


  <nav class="flex justify-center bg-white border-black">
    <div class="overflow w-full md:block md:w-auto" id="navbar-default">
      <ul
        class="flex justify-center font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
        <li class="flex justify-items-center">
          <a href="fullMenu.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-red-200 md:hover:bg-transparent md:border-0 md:hover:text-red-500 md:p-0  "
            aria-current="page">
            <span class="flex">
              <svg fill="#ff0000" height="20px" width="20px" class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                  d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2c.6 0 1-.4 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                  clip-rule="evenodd" />
              </svg>
              เมนูอาหารทั้งหมด
          </a>
        </li>
        <li>
          <a href="menuPage.php?menuTypeId=6"
            class="block py-2 px-3 text-gray-900 rounded hover:bg-red-200 md:hover:bg-transparent md:border-0 md:hover:text-red-500 md:p-0  ">
            <span class="flex">
              <svg class="mr-2" fill="#ff0000" height="20px" width="20px" version="1.1" id="Layer_1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 511.999 511.999" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <g>
                      <g>
                        <path
                          d="M361.079,110.717c3.076-4.802,1.674-11.19-3.128-14.264c-30.42-19.474-65.673-29.769-101.95-29.769 c-104.388,0-189.317,84.927-189.317,189.317s84.928,189.317,189.317,189.317s189.317-84.927,189.315-189.316 c0-42.677-13.861-82.965-40.087-116.509c-3.51-4.491-10-5.286-14.494-1.775c-4.494,3.512-5.288,10.001-1.775,14.495 c23.358,29.876,35.704,65.765,35.704,103.787c0,93.002-75.662,168.664-168.664,168.664S87.337,349.001,87.337,255.999 S162.999,87.336,256.001,87.336c32.323,0,63.725,9.167,90.814,26.51C351.613,116.92,358.003,115.52,361.079,110.717z">
                        </path>
                        <path
                          d="M500.389,255.999c0-11.871,2.872-25.02,5.649-37.735c4.878-22.338,9.922-45.437,1.246-66.359 c-9.045-21.812-29.357-34.694-49.002-47.151c-11.117-7.051-21.618-13.709-29.474-21.566 c-7.855-7.856-14.515-18.356-21.564-29.474c-12.458-19.643-25.34-39.956-47.15-49.001c-20.924-8.674-44.021-3.631-66.36,1.247 c-12.715,2.777-25.863,5.648-37.734,5.648c-11.871,0-25.019-2.871-37.734-5.648c-22.337-4.878-45.437-9.922-66.36-1.247 c-21.812,9.044-34.692,29.357-47.15,49.001c-7.049,11.117-13.709,21.618-21.564,29.474c-7.856,7.855-18.358,14.515-29.474,21.564 C34.073,117.21,13.76,130.093,4.715,151.905c-8.675,20.921-3.632,44.019,1.246,66.357c2.777,12.715,5.649,25.864,5.649,37.735 c0,11.871-2.872,25.02-5.649,37.735c-4.878,22.338-9.922,45.437-1.246,66.359c9.046,21.813,29.359,34.695,49.003,47.153 l3.971,2.524c4.808,3.066,11.192,1.656,14.259-3.152c3.069-4.808,1.658-11.192-3.15-14.26l-4.019-2.554 c-17.713-11.232-34.443-21.842-40.987-37.621c-6.192-14.936-2.043-33.931,2.348-54.041c3.01-13.786,6.123-28.042,6.123-42.143 c0-14.1-3.112-28.356-6.123-42.143c-4.391-20.11-8.539-39.105-2.348-54.04c6.544-15.78,23.274-26.39,40.986-37.622 c11.577-7.34,23.545-14.932,33.017-24.402c9.47-9.47,17.062-21.44,24.403-33.017c11.231-17.712,21.841-34.44,37.62-40.983 c14.935-6.194,33.931-2.046,54.043,2.346c13.785,3.01,28.041,6.123,42.14,6.123c14.099,0,28.353-3.112,42.14-6.123 c20.112-4.392,39.109-8.541,54.043-2.346c15.779,6.543,26.387,23.271,37.62,40.983c7.341,11.577,14.933,23.547,24.403,33.017 c9.47,9.47,21.442,17.062,33.017,24.403c17.713,11.232,34.442,21.842,40.986,37.621c6.192,14.936,2.043,33.931-2.347,54.041 c-3.01,13.786-6.123,28.042-6.123,42.143s3.112,28.356,6.123,42.143c4.391,20.11,8.539,39.105,2.347,54.04 c-6.544,15.78-23.274,26.39-40.986,37.622c-11.577,7.34-23.545,14.932-33.017,24.402c-9.47,9.47-17.062,21.44-24.403,33.017 c-11.231,17.712-21.841,34.44-37.62,40.983c-14.935,6.193-33.931,2.046-54.043-2.346c-13.785-3.01-28.041-6.123-42.14-6.123 c-14.099,0-28.353,3.112-42.14,6.123c-20.112,4.392-39.105,8.541-54.043,2.348c-15.779-6.543-26.387-23.273-37.62-40.983 c-2.942-4.639-5.984-9.434-9.124-14.031c-3.219-4.709-9.646-5.916-14.352-2.699c-4.709,3.218-5.918,9.643-2.7,14.352 c2.942,4.304,5.757,8.74,8.735,13.438c12.458,19.643,25.339,39.956,47.15,49.001c8.271,3.428,16.877,4.714,25.645,4.714 c13.416,0,27.206-3.011,40.715-5.963c12.715-2.777,25.863-5.648,37.734-5.648c11.871,0,25.019,2.871,37.734,5.648 c22.338,4.878,45.436,9.922,66.36,1.247c21.812-9.045,34.692-29.357,47.15-49.001c7.049-11.117,13.709-21.618,21.564-29.474 c7.856-7.855,18.357-14.515,29.474-21.564c19.645-12.458,39.957-25.341,49.002-47.153c8.675-20.921,3.632-44.019-1.246-66.357 C503.261,281.019,500.389,267.87,500.389,255.999z">
                        </path>
                        <path
                          d="M166.087,345.913c2.017,2.017,4.661,3.025,7.303,3.025c2.642,0,5.286-1.009,7.301-3.025l165.222-165.222 c4.033-4.031,4.033-10.57,0-14.603s-10.57-4.033-14.604,0L166.087,331.31C162.055,335.341,162.055,341.88,166.087,345.913z">
                        </path>
                        <path
                          d="M200.927,238.79c20.877,0,37.863-16.985,37.863-37.863c0-20.878-16.986-37.863-37.863-37.863 s-37.863,16.985-37.863,37.863C163.064,221.805,180.05,238.79,200.927,238.79z M200.927,183.716 c9.489,0,17.211,7.72,17.211,17.211c0,9.491-7.72,17.211-17.211,17.211c-9.491,0-17.211-7.72-17.211-17.211 C183.717,191.436,191.437,183.716,200.927,183.716z">
                        </path>
                        <path
                          d="M311.075,348.938c20.877,0,37.863-16.985,37.863-37.863c0-20.879-16.986-37.863-37.863-37.863 s-37.863,16.985-37.863,37.863C273.212,331.953,290.198,348.938,311.075,348.938z M311.075,293.864 c9.489,0,17.211,7.72,17.211,17.211c0,9.491-7.72,17.211-17.211,17.211c-9.491,0-17.211-7.72-17.211-17.211 C293.864,301.584,301.584,293.864,311.075,293.864z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
              สิทธิพิเศษ </a>
          </span>

        </li>
        <li class="">
          <a href="menuPage.php?menuTypeId=1"
            class="block py-2 px-3 text-gray-900 rounded hover:bg-red-200 md:hover:bg-transparent md:border-0 md:hover:text-red-500 md:p-0  ">
            <span class="flex">
              <svg class="mr-2" fill="#ff0000" height="20px" width="20px" fill="#000000" viewBox="0 -0.5 122.88 122.88"
                version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                style="enable-background:new 0 0 122.88 121.87" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <path
                      d="M97.34,0.74c0.86-0.93,2.3-0.99,3.23-0.13c0.93,0.86,0.99,2.3,0.13,3.23L81.98,24.1l-0.03,0.04 c-2.29,2.77-3.86,5.33-4.56,7.67c-0.62,2.07-0.53,3.95,0.39,5.59c0.49,0.88,0.33,1.96-0.32,2.67l0,0l-8.89,9.62 c-0.87-0.95-1.56-1.72-2.02-2.22c-0.21-0.28-0.45-0.55-0.7-0.81l-0.02,0.02c-0.12-0.13-0.25-0.25-0.38-0.37l7.6-8.23 c-0.89-2.38-0.88-4.91-0.06-7.6c0.88-2.92,2.75-6.03,5.44-9.27c0.06-0.08,0.11-0.16,0.18-0.23L97.32,0.72L97.34,0.74L97.34,0.74z M57.13,55.01c-0.84-0.94-0.76-2.39,0.18-3.23c0.94-0.84,2.39-0.76,3.23,0.18c9.41,10.54,38.5,41.73,46.56,53.39 c10.63,15.05-5.83,19.79-11.29,14.31c-13.64-13.19-42.6-46.82-55.33-61.08c-4.58,1.94-9.03,2.24-13.5,0.96 c-4.81-1.37-9.52-4.58-14.3-9.51l-0.06-0.06c-3.64-3.84-6.49-7.63-8.55-11.38c-2.11-3.86-3.4-7.68-3.86-11.47 c-0.49-4.08-0.11-7.88,0.99-11.25c1.29-3.96,3.58-7.31,6.58-9.8c3.02-2.5,6.73-4.12,10.87-4.62c3.44-0.41,7.19-0.06,11.07,1.21 c5.37,1.75,11.63,6.1,16.82,11.68c3.83,4.11,7.11,8.92,9.06,13.87c2.03,5.16,2.65,10.5,1.02,15.5c-0.96,2.96-2.7,5.74-5.4,8.25 c-0.93,0.86-2.37,0.8-3.23-0.12c-0.86-0.93-0.8-2.37,0.12-3.23c2.09-1.95,3.43-4.08,4.16-6.33c1.26-3.87,0.73-8.16-0.93-12.38 c-1.74-4.42-4.69-8.74-8.15-12.45c-4.68-5.02-10.23-8.91-14.91-10.44c-3.21-1.04-6.28-1.34-9.09-1c-3.26,0.4-6.18,1.65-8.51,3.6 c-2.34,1.95-4.13,4.58-5.16,7.71c-0.89,2.73-1.2,5.87-0.79,9.26c0.39,3.2,1.5,6.47,3.32,9.81c1.91,3.43,4.53,6.9,7.9,10.45 l0.02,0.03c4.22,4.35,8.27,7.15,12.28,8.29c3.79,1.08,7.65,0.66,11.68-1.35c0.92-0.53,2.11-0.35,2.84,0.47 c12.42,13.91,42.63,48.92,56.01,61.89c5.81,2.37,9.03-0.55,6.25-5.7C100.7,102.43,63.5,62.17,57.13,55.01L57.13,55.01L57.13,55.01z M45.07,75.12l-29.16,31.55c-0.06,0.06-0.11,0.12-0.18,0.18c-4.26,4.6,3.28,11.3,7.96,6.82l28.32-30.65l3.04,3.45l-28.1,30.41l0,0 c-0.06,0.07-0.12,0.13-0.2,0.2c-1.68,1.41-3.37,2.33-5.08,2.71c-1.76,0.4-3.49,0.22-5.15-0.56c-0.28-0.11-0.54-0.25-0.77-0.46 l-4.03-3.73l0,0c-0.06-0.06-0.12-0.11-0.18-0.18c-1.56-1.8-2.3-3.72-2.1-5.75c0.19-1.92,1.21-3.79,3.14-5.59l29.44-31.86 L45.07,75.12L45.07,75.12z M75.63,57.46l1.73-1.87c0.86-0.93,2.31-0.99,3.23-0.13s0.99,2.3,0.13,3.23l-2,2.16L75.63,57.46 L75.63,57.46z M104.45,7.43c0.86-0.93,2.3-0.99,3.23-0.13c0.93,0.86,0.99,2.3,0.13,3.23L91.4,28.3c-0.86,0.93-2.3,0.99-3.23,0.13 c-0.93-0.86-0.99-2.3-0.13-3.23L104.45,7.43L104.45,7.43L104.45,7.43z M111.55,14c0.86-0.93,2.3-0.99,3.23-0.13 c0.93,0.86,0.99,2.3,0.13,3.23L98.51,34.86c-0.86,0.93-2.3,0.99-3.23,0.13c-0.93-0.86-0.99-2.3-0.13-3.23L111.55,14L111.55,14 L111.55,14z M118.91,20.83c0.86-0.93,2.3-0.99,3.23-0.13c0.93,0.86,0.99,2.31,0.13,3.23L103.55,44.2c-0.07,0.07-0.14,0.13-0.21,0.2 c-4.26,4.1-8.33,6.47-12.22,7.14c-4.22,0.73-8.09-0.47-11.64-3.57c-0.95-0.83-1.04-2.28-0.22-3.22c0.83-0.95,2.28-1.04,3.22-0.22 c2.45,2.14,5.07,2.98,7.84,2.49c2.98-0.51,6.26-2.48,9.84-5.93l0.02-0.02l18.71-20.25L118.91,20.83L118.91,20.83z">
                    </path>
                  </g>
                </g>
              </svg>
              ชุดเซ็ต</a>
        </li>
        <li class="">
          <a href="menuPage.php?menuTypeId=2"
            class="block py-2 px-3 text-gray-900 rounded hover:bg-red-200 md:hover:bg-transparent md:border-0 md:hover:text-red-500 md:p-0 ">
            <span class="flex">
              <svg class="mr-2" fill="#ff0000" height="20px" width="20px" id="Capa_1"
                enable-background="new 0 0 511.989 511.989" viewBox="0 0 511.989 511.989"
                xmlns="http://www.w3.org/2000/svg">
                <g>
                  <path
                    d="m463.995 168.989h-17v-9c0-31.809-23.702-58.171-54.369-62.394 18.816-18.604 22.369-47.122 22.369-73.606 0-8.284-6.716-15-15-15-27.994 0-60.023 2.956-78.054 23.87-31.566-43.801-100.309-43.824-131.892 0-18.003-20.881-49.946-23.87-78.054-23.87-8.284 0-15 6.716-15 15 0 26.492 3.555 55.004 22.369 73.606-30.667 4.223-54.369 30.585-54.369 62.394v9h-17c-8.284 0-15 6.716-15 15v80c0 53.022 19.432 101.228 56.195 139.404 18.618 19.334 37.256 31.522 47.805 37.589v56.007c0 8.284 6.716 15 15 15h208c8.284 0 15-6.716 15-15v-56.007c10.549-6.067 29.187-18.254 47.805-37.589 36.763-38.177 56.195-86.382 56.195-139.404v-80c0-8.284-6.716-15-15-15zm-79.595-129.561c-2.682 32.007-14.122 41.239-27.73 45.39-6.149-4.406-13.072-7.697-20.454-9.671 2.415-21.663 10.493-33.38 48.184-35.719zm-128.405-9.439c27.068 0 50.449 20.594 48.916 44.838-3.499.861-6.919 2.005-10.221 3.458-22.739-17.721-54.634-17.733-77.388 0-3.302-1.453-6.723-2.597-10.222-3.458-1.544-24.387 21.995-44.838 48.915-44.838zm-80.222 45.158c-7.382 1.974-14.304 5.265-20.453 9.671-13.608-4.15-25.049-13.382-27.73-45.39 37.691 2.339 45.768 14.056 48.183 35.719zm-80.778 84.842c0-24.077 25.092-40.044 46.855-29.95 7.572 3.513 16.588.162 20.007-7.487 8.491-19 32.195-25.464 49.097-13.562 6.314 4.447 14.976 3.372 20.012-2.487 13.197-15.354 36.878-15.337 50.061.001 5.035 5.856 13.696 6.932 20.011 2.486 16.884-11.89 40.599-5.453 49.096 13.562 3.428 7.67 12.453 10.991 20.007 7.487 21.756-10.09 46.855 5.864 46.855 29.95v9h-322v-9zm354 39v42h-386v-42zm-282 283v-35h178v35zm234.964-100.208c-19.107 20.08-38.544 31.459-45.556 35.208h-200.817c-7.012-3.749-26.448-15.128-45.556-35.208-29.594-31.099-45.345-68.346-46.898-110.792h385.725c-1.554 42.447-17.304 79.694-46.898 110.792z" />
                </g>
              </svg>
              ดงบุริ</a>
        </li>
        <li class="">
          <a href="menuPage.php?menuTypeId=3"
            class="block py-2 px-3 text-gray-900 rounded hover:bg-red-200 md:hover:bg-transparent md:border-0 md:hover:text-red-500 md:p-0  ">
            <span class="flex">
              <svg class="mr-2" fill="#ff0000" height="20px" width="20px" version="1.1" id="Layer_1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <g>
                      <path
                        d="M328.347,0H50.087C22.469,0,0,22.469,0,50.087v278.26c0,27.618,22.469,50.087,50.087,50.087h278.26 c27.618,0,50.087-22.469,50.087-50.087V50.087C378.434,22.469,355.965,0,328.347,0z M144.695,144.695h50.087 c9.206,0,16.696,7.49,16.696,16.696v50.087h-66.782V144.695z M33.391,50.087c0-9.206,7.49-16.696,16.696-16.696h61.217v178.087 H33.391V50.087z M178.087,345.043h-128c-9.206,0-16.696-7.49-16.696-16.696v-83.478h144.695V345.043z M345.043,328.347 c0,9.206-7.49,16.696-16.696,16.696H211.478V244.869h133.565V328.347z M345.043,211.478H244.869v-50.087 c0-27.618-22.469-50.087-50.087-50.087h-50.087V33.391h183.652c9.206,0,16.696,7.49,16.696,16.696V211.478z">
                      </path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M428.521,0c-9.22,0-16.696,7.475-16.696,16.696v478.608c0,9.22,7.475,16.696,16.696,16.696 c9.22,0,16.696-7.475,16.696-16.696V16.696C445.216,7.475,437.741,0,428.521,0z">
                      </path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M511.959,494.141L478.568,15.534c-0.642-9.198-8.626-16.12-17.818-15.494c-9.198,0.642-16.135,8.619-15.494,17.818 l33.391,478.608c0.614,8.803,7.947,15.535,16.639,15.535c0.391,0,0.784-0.013,1.179-0.041 C505.664,511.317,512.6,503.339,511.959,494.141z">
                      </path>
                    </g>
                  </g>
                </g>
              </svg>
              </svg>
              เบนโตะ</a>
        </li>
        <li class="">
          <a href="menuPage.php?menuTypeId=4"
            class="block py-2 px-3 text-gray-900 rounded hover:bg-red-200 md:hover:bg-transparent md:border-0 md:hover:text-red-500 md:p-0 ">
            <span class="flex">
              <svg class="mr-2" fill="#ff0000" height="20px" width="20px" version="1.1" id="_x32_"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                xml:space="preserve" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <style type="text/css">
                    .st0 {
                      fill: #ff0000;
                    }
                  </style>
                  <g>
                    <polygon class="st0" points="137.484,9.563 137.484,40.344 509.172,40.344 509.172,0 "></polygon>
                    <path class="st0"
                      d="M316.766,60.625c0-7.953-6.453-14.406-14.406-14.406c-7.969,0-14.406,6.453-14.406,14.406v7.109h-24.188 v-7.109c0-7.953-6.453-14.406-14.391-14.406c-7.969,0-14.422,6.453-14.422,14.406v7.109h-24.172v-7.109 c0-7.953-6.438-14.406-14.406-14.406c-7.953,0-14.406,6.453-14.406,14.406v7.109h-44.484v30.797l44.484,1.125v116H2.828v16.469 c-0.016,62.688,24.391,121.594,68.719,165.891c22.828,22.828,49.547,40.406,79.453,52.266V512h172.859v-61.719 c29.922-11.859,56.641-29.438,79.453-52.266c44.328-44.297,68.719-103.203,68.719-165.891v-16.469H316.766V103.125l192.406,4.938 V67.734H316.766V60.625z M210.781,100.406l24.172,0.625v114.625h-24.172V100.406z M295.047,483.188H179.813v-27.844 c18.422,4.75,37.719,7.281,57.625,7.266c19.875,0.016,39.188-2.516,57.609-7.266V483.188z M382.953,377.641 c-37.297,37.266-88.656,60.266-145.516,60.266c-56.875,0-108.25-23-145.531-60.266c-34.531-34.563-56.813-81.234-59.891-133.172 h410.828C439.781,296.406,417.5,343.078,382.953,377.641z M287.953,215.656h-24.188V101.766l24.188,0.625V215.656z">
                    </path>
                  </g>
                </g>
              </svg>
              ราเม็ง</a>
        </li>
        <li class="">
          <a href="menuPage.php?menuTypeId=5"
            class="block py-2 px-3 text-gray-900 rounded hover:bg-red-200 md:hover:bg-transparent md:border-0 md:hover:text-red-500 md:p-0 ">
            <span class="flex">
              <svg class="mr-2" height="20px" width="20px" viewBox="0 0 32 32" fill="none"
                xmlns="http://www.w3.org/2000/svg" stroke="#ff0000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M22 10C22 10 21 9 21 8C21 7 22 6 22 6C22 6 23 5 23 4C23 3 22 2 22 2M17 10C17 10 16 9 16 8C16 7 17 6 17 6C17 6 18 5 18 4C18 3 17 2 17 2M11 31H27M6 22.0029C6 22.0029 6 21.9999 5 21.9999C2.791 21.9999 1 20.2089 1 17.9999C1 15.7909 2.791 13.9999 5 13.9999H30C30.386 13.9999 31 13.9999 31 14.9999C31 21.6269 25.627 26.9999 19 26.9999C13.054 26.9999 8.117 22.6739 7.166 16.9979"
                    stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg>
              เครื่องดื่ม</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

</body>

</html>
