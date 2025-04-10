
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('dashboard.dashboardAdmin')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path
                            d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                            id="path-1"></path>
                        <path
                            d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                            id="path-3"></path>
                        <path
                            d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                            id="path-4"></path>
                        <path
                            d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                            id="path-5"></path>
                    </defs>
                    <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                            <g id="Icon" transform="translate(27.000000, 15.000000)">
                                <g id="Mask" transform="translate(0.000000, 8.000000)">
                                    <mask id="mask-2" fill="white">
                                        <use xlink:href="#path-1"></use>
                                    </mask>
                                    <use fill="#696cff" xlink:href="#path-1"></use>
                                    <g id="Path-3" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-3"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                    </g>
                                    <g id="Path-4" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-4"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                    </g>
                                </g>
                                <g id="Triangle"
                                    transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                    <use fill="#696cff" xlink:href="#path-5"></use>
                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">{{config('app.name')}}</span>
        </a>

        <a href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="{{ Route::is('dashboard.dashboardAdmin') ? 'active' : '' }} menu-item">
            <a href="{{route('dashboard.dashboardAdmin')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Pages</span></li>
        <!-- Cards -->
        <li class="{{ Route::is('dashboard.users.index') ? 'active' : '' }} menu-item ">
            <a href="{{route('dashboard.users.index')}}" class="menu-link">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZxJREFUSEu11L1vjWEYx/HPSecmmgpCajHUaOofIF5K01EbU/8CidCkpoYNIQzduyojUukLo9UmBgtB21RIGQnPldxtTh7nPveTU+da7/v6fa/3lj5bq8/6mgImq0Bu4kQK6D3m8bwUYBPAHG5nhGZxvxukBDiPF9hAgFaS2DncwRGcwXoOUgKsJoFpPK6JTGEJy7jYK+AbDlRlGMTPmsgwtvEZx3oFbOIQDuJrBhB/olQdrVSiqPlZRDmeZEoUPbrQK6C9yTEx0ZOBBL2Lw/ttcgR2DSEWwu32u+pLQB/uZ0x3fUdxHTGev/Ayzf+7/7FoJY2u792aHOMZUY/hVJqmdrEtvMHrlM2PTqQcIKZiMTWxSQaxCzNYq3/uBJjAs/TxKW4hjtv3mnNkGMcv3sMnLAKLsd2zOmAIb1PkcWtuNAkf91I5v+BkNXk7u351wFU8wCucbige30InljIO35Vq8xdygDhol0rLkwGPp8P3CJdzgA8YQZSqXvNSQkfxCR9xPAf4kx5KNyoH+8e/V6FSNtkpauzY9GPfM/gL5dBHGcZ57nQAAAAASUVORK5CYII="/>                <div data-i18n="Basic">users</div>
            </a>
        </li>

        <li class="{{ Route::is('dashboard.orders.*') ? 'active' : '' }} menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAFZJREFUSEtjZKAxYKSx+Qx0t+A/lXwEdzi6D+hmAa6ggzmAaHlcPiDaALQgxXDAqAXoiW7wBBGl2WE0H+AswwZPJI/m5IFPpjTLaJQajKGf7nUy1X0AAFA0Khnvfun/AAAAAElFTkSuQmCC"/>              <div data-i18n="Form Elements">Orders</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{route('dashboard.orders.pendingOrders')}}" class="menu-link">
                  <div data-i18n="Basic Inputs">Pending Orders</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{route('dashboard.orders.confirmedOrders')}}" class="menu-link">
                  <div data-i18n="Input groups">Confirmed Orders</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="{{ Route::is('dashboard.applyForJobs.index') ? 'active' : '' }} menu-item">
            <a href="{{route('dashboard.applyForJobs.index')}}" class="menu-link">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbBJREFUSEvt1TFsT1EUx/FPkw6GbhoGIZHQWAymGkgMwkJH0kQYBIlqLI1aSBgJA1FRIk26SEzCIMQgsTBJ00EYGhaSahPRRgzCPc39y1//773//0maGLzpvXvPOd97fuec+7qs8NO1wvH904CzuIGvVSq0y2AYQ9iA97iCO9iHh3iNHVgsg1QBzuNCgeOZDLqLIxjLhyhklAH68CYBivZ/YCPm8QE9CbIGX4oIZYDjuFWh7dEkW2QQMoVcA/m9xaUMcAzjFYDYj1o8xW7sx6M6GWzC2wqJNuNzqsEMViMkfVcHELbncLHAaRSXcA3RZS+x/W+6KHyiRSNIo00vZ+1PpZNfz0EXEJ11s24GVfOzDgdxAP3Z8H5e+9nsWFTkVTiB07kdl4NC96u4je84jIlcr5E8I799lgPW4wm2dHAJTmNPOsxHHMIkviFizDX8mwHdeIVtHQRvmDzHrvzxGHsTpNEES8vNgJP58qoRf8l0MGV8Lw/bgzQXL7CzKIMpbK0bPQV7lodtLT6lzpvNV0dLBqFfFLjuE3r3djIHf7RXTUrprdzuf1CT02r+H9BWwl+D2kYZ6esVpwAAAABJRU5ErkJggg=="/>
                <div data-i18n="Basic">Apply For Jobs</div>
            </a>
        </li>
          <li class="{{ Route::is('dashboard.contact') ? 'active' : '' }} menu-item" >
            <a  href="{{route('dashboard.contact')}}" class="menu-link">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAQZJREFUSEvt1T1KBEEQhuFnQ6+gILiCP8cwNDLdIxgYiiCCsQaaiGCw5/AIHkAFI0XB0FAwEXVHbOkd7V566TFy0u6qt/qrqm96Ov56HeeXA2zgACuFRdxgG+dNXA7wiLnC5OH6HRYnAUpzr+II61+Bn8XX7kEftylAFc3xngJU0TwHGCMXNKAdl3zBPyBM5J9IdI+F9h7U6sE1dn6zilqAsQGMN7lzwAPmW/MfCljDGZYS+/Gtefs8fkFjFYdYji7N4hiDzOJdYjdongPEZ0GulxF0ZuTvz9jHCV4LtjzppgHwhiH28FSSONxN2XUDuMAmrqZJPAmwhdPIGadm1P7h/Cikc8AHqrk7GaSdRPsAAAAASUVORK5CYII="/>                <div data-i18n="Basic" >Contact</div>
            </a>
        </li>
        <li class="{{ Route::is('dashboard.settings') ? 'active' : '' }} menu-item">
            <a href="{{route('dashboard.settings')}}" class="menu-link">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAldJREFUSEu11UnITmEUB/Dfl0goFqYIIUNZkJVS2FCUcUUUyrhUxoWNhTEbNmaKshASsSTDmkRCZsqcjIXwHD2vbtd93+9Nn2dz73Of85z/Of/zP+e2+M+r5T/71yzAdGzG8BzQLazE2dYCbBbgOXqVnN3H4LYAmIDz2VEtoJ95Px4XG4FUZTAb83ETnbA8O3iIgYX3Afl9J75l+g7hWBGwDDADJ0sRfcWeBLYVT/JZf6zCEnQo2U/D6dq3IkBX3EFPbMIgTMJUXKlDQ1AUAZ3DI6xLGb/AULyPO0WAmTiBqxhdctgb+zAmfw/ARXhVsruWAEfiTxZFgHG4kEEPYDF+IJwHaDyLK+gahbdoh70pi4X5TmR2uZxB7JcmR7uyl5BgSPEw5uFUpiCOt2MydmMZhmR64ywCi2x/ryoVfUlN1RHt8T1deJaK3Cf3wct8L+pzD48Ragr7uPcJXRqpKM5qAKGOkN/TlH5f9MvvYRMqiqLGWXxvGqBIUUT5IEV4EAsyRWuys42Ykpzvz8UuUhTSjXr8RVEUJjo2aDuS6/EZPXAjy7eYfUQfRX6DzrkecxsVeRaO15Fp1KAm01BWKCSyDc0XV6gtQKN3zpSL3A23S402FqtxtOSotp2Tot+GS4nGGCVrM2hQ9qFKRVWjIuyiU1fkAGIfY3tH6vCJFcB1R0XNtjjsXmN9HnrBdfds9A4xWj5iQ27CAG112FUxMSIXuZhxbVzHzLlbh766jVZlH5oP7RdXcXzXxWj2jxa/zC2p2MOyp+t5bLTZL7MRCw3Pms3gnwF+AbPxexmzkv6cAAAAAElFTkSuQmCC"/>                <div data-i18n="Basic">Settings</div>
            </a>
        </li>
    </ul>
</aside>

