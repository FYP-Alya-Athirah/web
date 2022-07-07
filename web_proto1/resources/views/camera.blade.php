
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="refresh" content="10" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Camera Detection
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.3" rel="stylesheet" />
</head>
<script>
  function includeHTML() {
    var z, i, elmnt, file, xhttp;
    /*loop through a collection of all HTML elements:*/
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
      elmnt = z[i];
      /*search for elements with a certain atrribute:*/
      file = elmnt.getAttribute("w3-include-html");
      if (file) {
        /*make an HTTP request using the attribute value as the file name:*/
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4) {
            if (this.status == 200) {elmnt.innerHTML = this.responseText;}
            if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
            /*remove the attribute, and call this function once more:*/
            elmnt.removeAttribute("w3-include-html");
            includeHTML();
          }
        }      
        xhttp.open("GET", file, true);
        xhttp.send();
        /*exit the function:*/
        return;
      }
    }
  };
  </script>
<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div w3-include-html="pages/navigation.html"></div> 
    <script>
      includeHTML();
    </script>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Camera</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Camera</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>

                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">

      <div class="row">
        <div class="col-md-5 mt-4">
          <div class="card h-100 mb-4">
            <div class="card-header pb-0 px-3">
              <div class="row">
                <div class="col-md-6">
                  <h6 class="mb-0">Recent Activity</h6>
                </div>
              </div>
            </div>
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>

                  </thead>
                  <tbody>
                    <?php
                      $mysqli = new mysqli("localhost","root","","schoolmng");

                      if ($mysqli -> connect_errno) {
                        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                        exit();
                      }
                      $sql = "SELECT * FROM recognitions ORDER BY id DESC";
                      if ($result = $mysqli -> query($sql)) {
                        while ($row = $result -> fetch_row()) {
                          // printf ("%s (%s)\n", $row[1], $row[4]);
                          echo "<tr>
                          <td>
                            <div class='d-flex px-2 py-1'>
                              <div class='d-flex flex-column justify-content-center'>
                                <h6 class='mb-0 text-sm'>";
                          echo $row[1];
                          echo"</h6>
                              </div>
                            </div>
                          </td>";
                          echo "<td><p class='text-xs font-weight-bold mb-0'>Attendance</p></td>";
                          echo "<td>
                            <p class='text-xs font-weight-bold mb-0'>";
                          echo $row[2];
                          echo "</p>
                          </td>";
                          echo "</tr>";
                        }
                        $result -> free_result();
                      }
                    ?>

                  </tbody>
                </table>
              </div>
          </div>
        </div>
        <div class="col-md-5 mt-4">
          <!-- <figure>
            <div id="stream-container" class="image-container hidden">
                <div class="close" id="close-stream"></div>
                <img id="stream" src="http://192.168.100.15:81/stream" crossorigin>
            </div>
          </figure> -->

        </div>
        
      </div>
      <footer class="footer py-4  ">

      </footer>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="../assets/js/material-dashboard.min.js?v=3.0.3"></script>
  <script>
document.addEventListener('DOMContentLoaded', function (event) {
  var baseHost = document.location.origin
  // var baseHost = 'http://192.168.100.15'
  var streamUrl = baseHost + ':81'

  function fetchUrl(url, cb){
    fetch(url)
      .then(function (response) {
        if (response.status !== 200) {
          cb(response.status, response.statusText);
        } else {
          response.text().then(function(data){
            cb(200, data);
          }).catch(function(err) {
            cb(-1, err);
          });
        }
      })
      .catch(function(err) {
        cb(-1, err);
      });
  }

  function setReg(reg, offset, mask, value, cb){
    //console.log('Set Reg', '0x'+reg.toString(16), offset, '0x'+mask.toString(16), '0x'+value.toString(16), '('+value+')');
    value = (value & mask) << offset;
    mask = mask << offset;
    fetchUrl(`${baseHost}/reg?reg=${reg}&mask=${mask}&val=${value}`, cb);
  }

  function getReg(reg, offset, mask, cb){
    mask = mask << offset;
    fetchUrl(`${baseHost}/greg?reg=${reg}&mask=${mask}`, function(code, txt){
      let value = 0;
      if(code == 200){
        value = parseInt(txt);
        value = (value & mask) >> offset;
        txt = ''+value;
      }
      cb(code, txt);
    });
  }

  function setXclk(xclk, cb){
    fetchUrl(`${baseHost}/xclk?xclk=${xclk}`, cb);
  }

  function setWindow(start_x, start_y, end_x, end_y, offset_x, offset_y, total_x, total_y, output_x, output_y, scaling, binning, cb){
    fetchUrl(`${baseHost}/resolution?sx=${start_x}&sy=${start_y}&ex=${end_x}&ey=${end_y}&offx=${offset_x}&offy=${offset_y}&tx=${total_x}&ty=${total_y}&ox=${output_x}&oy=${output_y}&scale=${scaling}&binning=${binning}`, cb);
  }

  const setRegButton = document.getElementById('set-reg')
  setRegButton.onclick = () => {
    let reg = parseInt(document.getElementById('reg-addr').value);
    let mask = parseInt(document.getElementById('reg-mask').value);
    let value = parseInt(document.getElementById('reg-value').value);

    setReg(reg, 0, mask, value, function(code, txt){
      if(code != 200){
        alert('Error['+code+']: '+txt);
      }
    });
  }

  const getRegButton = document.getElementById('get-reg')
  getRegButton.onclick = () => {
    let reg = parseInt(document.getElementById('get-reg-addr').value);
    let mask = parseInt(document.getElementById('get-reg-mask').value);
    let value = document.getElementById('get-reg-value');

    getReg(reg, 0, mask, function(code, txt){
      if(code != 200){
        value.innerHTML = 'Error['+code+']: '+txt;
      } else {
        value.innerHTML = '0x'+parseInt(txt).toString(16)+' ('+txt+')';
      }
    });
  }

  const setXclkButton = document.getElementById('set-xclk')
  setXclkButton.onclick = () => {
    let xclk = parseInt(document.getElementById('xclk').value);

    setXclk(xclk, function(code, txt){
      if(code != 200){
        alert('Error['+code+']: '+txt);
      }
    });
  }

  const setResButton = document.getElementById('set-resolution')
  setResButton.onclick = () => {
    let start_x = parseInt(document.getElementById('start-x').value);
    let offset_x = parseInt(document.getElementById('offset-x').value);
    let offset_y = parseInt(document.getElementById('offset-y').value);
    let total_x = parseInt(document.getElementById('total-x').value);
    let total_y = parseInt(document.getElementById('total-y').value);
    let output_x = parseInt(document.getElementById('output-x').value);
    let output_y = parseInt(document.getElementById('output-y').value);

    setWindow(start_x, 0, 0, 0, offset_x, offset_y, total_x, total_y, output_x, output_y, false, false, function(code, txt){
      if(code != 200){
        alert('Error['+code+']: '+txt);
      }
    });
  }

  const setRegValue = (el) => {
    let reg = el.attributes.reg?parseInt(el.attributes.reg.nodeValue):0;
    let offset = el.attributes.offset?parseInt(el.attributes.offset.nodeValue):0;
    let mask = el.attributes.mask?parseInt(el.attributes.mask.nodeValue):255;
    let value = 0;
    switch (el.type) {
      case 'checkbox':
        value = el.checked ? mask : 0;
        break;
      case 'range':
      case 'text':
      case 'select-one':
        value = el.value;
        break
      default:
        return;
    }

    setReg(reg, offset, mask, value, function(code, txt){
      if(code != 200){
        alert('Error['+code+']: '+txt);
      }
    });
  }

  // Attach on change action for register elements
  document
    .querySelectorAll('.reg-action')
    .forEach(el => {
        if (el.type === 'text') {
            el.onkeyup = function(e){
                if(e.keyCode == 13){
                    setRegValue(el);
                }
            }
        } else {
            el.onchange = () => setRegValue(el)
        }
    })


  const updateRegValue = (el, value, updateRemote) => {
    let initialValue;
    let offset = el.attributes.offset?parseInt(el.attributes.offset.nodeValue):0;
    let mask = (el.attributes.mask?parseInt(el.attributes.mask.nodeValue):255) << offset;
    value = (value & mask) >> offset;
    if (el.type === 'checkbox') {
      initialValue = el.checked
      value = !!value
      el.checked = value
    } else {
      initialValue = el.value
      el.value = value
    }
  }


  const printReg = (el) => {
    let reg = el.attributes.reg?parseInt(el.attributes.reg.nodeValue):0;
    let offset = el.attributes.offset?parseInt(el.attributes.offset.nodeValue):0;
    let mask = el.attributes.mask?parseInt(el.attributes.mask.nodeValue):255;
    let value = 0;
    switch (el.type) {
      case 'checkbox':
        value = el.checked ? mask : 0;
        break;
      case 'range':
      case 'select-one':
        value = el.value;
        break
      default:
        return;
    }
    value = (value & mask) << offset;
    return '0x'+reg.toString(16)+', 0x'+value.toString(16);
  }



  const hide = el => {
    el.classList.add('hidden')
  }
  const show = el => {
    el.classList.remove('hidden')
  }

  const disable = el => {
    el.classList.add('disabled')
    el.disabled = true
  }

  const enable = el => {
    el.classList.remove('disabled')
    el.disabled = false
  }

  const updateValue = (el, value, updateRemote) => {
    updateRemote = updateRemote == null ? true : updateRemote
    let initialValue
    if (el.type === 'checkbox') {
      initialValue = el.checked
      value = !!value
      el.checked = value
    } else {
      initialValue = el.value
      el.value = value
    }

    if (updateRemote && initialValue !== value) {
      updateConfig(el);
    } else if(!updateRemote){
      if(el.id === "aec"){
        value ? hide(exposure) : show(exposure)
      } else if(el.id === "agc"){
        if (value) {
          show(gainCeiling)
          hide(agcGain)
        } else {
          hide(gainCeiling)
          show(agcGain)
        }
      } else if(el.id === "awb_gain"){
        value ? show(wb) : hide(wb)
      } else if(el.id === "face_recognize"){
        value ? enable(enrollButton) : disable(enrollButton)
      } else if(el.id == "led_intensity"){
        value > -1 ? show(ledGroup) : hide(ledGroup)
      }
    }
  }

  function updateConfig (el) {
    let value
    switch (el.type) {
      case 'checkbox':
        value = el.checked ? 1 : 0
        break
      case 'range':
      case 'select-one':
        value = el.value
        break
      case 'button':
      case 'submit':
        value = '1'
        break
      default:
        return
    }

    const query = `${baseHost}/control?var=${el.id}&val=${value}`

    fetch(query)
      .then(response => {
        console.log(`request to ${query} finished, status: ${response.status}`)
      })
  }

  document
    .querySelectorAll('.close')
    .forEach(el => {
      el.onclick = () => {
        hide(el.parentNode)
      }
    })

  // read initial values
  fetch(`${baseHost}/status`)
    .then(function (response) {
      return response.json()
    })
    .then(function (state) {
      document
        .querySelectorAll('.default-action')
        .forEach(el => {
          updateValue(el, state[el.id], false)
        })
      document
        .querySelectorAll('.reg-action')
        .forEach(el => {
            let reg = el.attributes.reg?parseInt(el.attributes.reg.nodeValue):0;
            if(reg == 0){
              return;
            }
            updateRegValue(el, state['0x'+reg.toString(16)], false)
        })
    })

  const view = document.getElementById('stream')
  const viewContainer = document.getElementById('stream-container')
  const stillButton = document.getElementById('get-still')
  const streamButton = document.getElementById('toggle-stream')
  const enrollButton = document.getElementById('face_enroll')
  const closeButton = document.getElementById('close-stream')
  const saveButton = document.getElementById('save-still')
  const ledGroup = document.getElementById('led-group')

  const stopStream = () => {
    window.stop();
    streamButton.innerHTML = 'Start Stream'
  }

  const startStream = () => {
    view.src = `${streamUrl}/stream`
    show(viewContainer)
    streamButton.innerHTML = 'Stop Stream'
  }

  // Attach actions to buttons
  stillButton.onclick = () => {
    stopStream()
    view.src = `${baseHost}/capture?_cb=${Date.now()}`
    show(viewContainer)
  }

  closeButton.onclick = () => {
    stopStream()
    hide(viewContainer)
  }

  streamButton.onclick = () => {
    const streamEnabled = streamButton.innerHTML === 'Stop Stream'
    if (streamEnabled) {
      stopStream()
    } else {
      startStream()
    }
  }

  enrollButton.onclick = () => {
    updateConfig(enrollButton)
  }

  saveButton.onclick = () => {
    var canvas = document.createElement("canvas");
    canvas.width = view.width;
    canvas.height = view.height;
    document.body.appendChild(canvas);
    var context = canvas.getContext('2d');
    context.drawImage(view,0,0);
    try {
      var dataURL = canvas.toDataURL('image/jpeg');
      saveButton.href = dataURL;
      var d = new Date();
      saveButton.download = d.getFullYear() + ("0"+(d.getMonth()+1)).slice(-2) + ("0" + d.getDate()).slice(-2) + ("0" + d.getHours()).slice(-2) + ("0" + d.getMinutes()).slice(-2) + ("0" + d.getSeconds()).slice(-2) + ".jpg";
    } catch (e) {
      console.error(e);
    }
    canvas.parentNode.removeChild(canvas);
  }

  // Attach default on change action
  document
    .querySelectorAll('.default-action')
    .forEach(el => {
      el.onchange = () => updateConfig(el)
    })

  // Custom actions
  // Gain
  const agc = document.getElementById('agc')
  const agcGain = document.getElementById('agc_gain-group')
  const gainCeiling = document.getElementById('gainceiling-group')
  agc.onchange = () => {
    updateConfig(agc)
    if (agc.checked) {
      show(gainCeiling)
      hide(agcGain)
    } else {
      hide(gainCeiling)
      show(agcGain)
    }
  }

  // Exposure
  const aec = document.getElementById('aec')
  const exposure = document.getElementById('aec_value-group')
  aec.onchange = () => {
    updateConfig(aec)
    aec.checked ? hide(exposure) : show(exposure)
  }

  // AWB
  const awb = document.getElementById('awb_gain')
  const wb = document.getElementById('wb_mode-group')
  awb.onchange = () => {
    updateConfig(awb)
    awb.checked ? show(wb) : hide(wb)
  }

  // Detection and framesize
  const detect = document.getElementById('face_detect')
  const recognize = document.getElementById('face_recognize')
  const framesize = document.getElementById('framesize')

  framesize.onchange = () => {
    updateConfig(framesize)
    if (framesize.value > 5) {
      updateValue(detect, false)
      updateValue(recognize, false)
    }
  }

  detect.onchange = () => {
    if (framesize.value > 5) {
      alert("Please select CIF or lower resolution before enabling this feature!");
      updateValue(detect, false)
      return;
    }
    updateConfig(detect)
    if (!detect.checked) {
      disable(enrollButton)
      updateValue(recognize, false)
    }
  }

  recognize.onchange = () => {
    if (framesize.value > 5) {
      alert("Please select CIF or lower resolution before enabling this feature!");
      updateValue(recognize, false)
      return;
    }
    updateConfig(recognize)
    if (recognize.checked) {
      enable(enrollButton)
      updateValue(detect, true)
    } else {
      disable(enrollButton)
    }
  }
})

        </script>

</body>

</html>