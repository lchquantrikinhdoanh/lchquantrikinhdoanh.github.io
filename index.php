<html>
<head>
    <meta charset="utf-8" /> 
    <meta name="author" content="haulht@outlook.com">
    <meta property="fb:app_id" content="199615683854287">
    <meta property="og:title" content="Tạo ảnh đại diện chào mừng Đại Hội">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://suctremmt.com/avtdh/">
    <meta property="og:description" content="Công cụ tạo ảnh đại diện Chào mừng Đại Hội Đoàn TNCS Hồ Chí Minh Khoa Mạng máy tính và Truyền thông">
    <meta property="og:image" content="http://suctremmt.com/avtdh/image.png">
    <title>HÔỊ TRẠI KHOA QUẢN TRỊ KINH DOANH</title>
    <link rel="icon" type="image/jpeg" href="default.jpg">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/color-picker.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
</head>
<body>
    	<h1 style="background-color: #ff5a00; padding: 20px 0px">HÔỊ TRẠI KHOA QUẢN TRỊ KINH DOANH</h1>
    <div class="main-content">
        <div class="image-editor">
            <div class="column">
                <div class="cropit-preview" id="crop-image"></div>
                <canvas id="leCanvas" width="650" height="650"></canvas>
            </div>
            <div class="column">
                
                <div class="area-export">
                    <p class="note"><strong>Chú ý:</strong>
                        <br>* Sử dụng ảnh kích thước độ phân giải từ 650 pixel trở lên.
                        <br>* Sử dụng trình duyệt Chrome hoặc IE để tải ảnh.<br>
                    </p>
                    <input type='file' id="upload_background"/>
                    
                    <div class="ob-btn select-image-btn">Chọn ảnh</div>
                    <div class="image-size-label">
                        Thay đổi kích thước
                    </div>
                    <input type="range" class="cropit-image-zoom-input" min="0" max="3" step="0.01">
                    <div class="image-size-label label-rotate">
                        Xoay hình
                    </div>
                    <div id='controls'>
                      <button id='rotate_left'  type='button' title='Rotate left'> <i class="fa fa-rotate-left"></i> </button>
                      <button id='rotate_right' type='button' title='Rotate right'> <i class="fa fa-rotate-right"></i> </button>
                    </div>
                    <input type="file" class="cropit-image-input">
                    
                   
                    <button class="ob-btn download" onclick="downloadCV()">Tải ảnh</button> 
                    <span class="label-download-or-export">hoặc thử</span>
                    <button class="ob-btn export" onclick="onExportClick()" style="display: block;">Mở ảnh</button>
                    
                    <!--<p class="note">Hình khởi tạo sẽ mở bằng cửa sổ mới. Tắt chức năng chặn popup để tải ảnh ^_^</p>-->
                </div>
                
                
                <div class="area-text" style="display: none;">
                   
                    <button class="btn-add-text-item" onclick="addNewText()"><i class="fa fa-plus"></i></button>
                    <ul class="list-text">
                        
                    </ul>
                    <li class="template-text">
                        <button class="btn-close-text" onclick="deleteText(this);"><i class="fa fa-times"></i></button>
                        <input type="text" class="text-content" onkeyup="changeTextContent(this);" value="MMT&TT">
                        <input type="number" min="1" class="text-size" onchange="changeTextSize(this);" value="25">
                        <select class="choose-font" onChange="changeFont(this);">
                                                        <option selected value="NotoSerif-Regular">MOTHICA</option>
                                                    </select>
                        <span class="label-color">Màu chữ</span> 
                        <button class="btn-picker-color" onclick="changeTextColor(this);"></button>
                        <input name="text-color" class="text-color">
                        <input type="checkbox" name="have-border" value="1" class="border-color" onchange="toggleCheckbox(this);"> 
                        <span class="label-checkbox">Viền</span>
                        <div class="area-border">
                            <span class="label-color label-border">Màu viền</span>
                            <button class="btn-picker-border-color" onclick="changeBorderColor(this);"></button>
                            <input name="border-color" class="text-color">
                            <span class="label-color label-border">Kích thướt viền</span>
                            <input type="number" min="1" class="text-size border-size" onchange="changeBorderSize(this);" value="5">
                        </div>
                    </li>
                    <button class="ob-btn add-text" onclick="onBack()" style="display: block;">Quay lại</button>
                    <button class="ob-btn download" onclick="downloadCV()">Tải ảnh</button> 
                    <span class="label-download-or-export">hoặc thử</span>
                    <button class="ob-btn export" onclick="onExportClick()" style="display: block;">Mở ảnh</button>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both; text-align: center;">
<p>Design by: <a href="mailto:haulht@outlook.com">Lê Huỳnh Trung Hậu</a> - Editor: <a href="mailto:bahien@sgweb.vn">Bá Hiển</a></p></div>	
    <script>
        var font_default = "NotoSerif-Regular";
        var color_default = "white";
    </script>
    <script src="js/jquery.v2.0.0.min.js"></script>
    <script src="js/jquery.cropit.js"></script>
    <script src="js/pica.js"></script>
    <script src="js/color-picker.min.js"></script>
    <script src="js/common.js"></script>
	<script>
		var checkError;
		checkError = function(e) {
			if (e.code === 1) {
				var textError = "Vui lòng chọn hình ảnh có chiều rộng tối thiểu là " + $('.cropit-preview-image-container').outerWidth() + "px và chiều cao tối thiểu là " + $('.cropit-preview-image-container').outerHeight() + ".";
				alert(textError);
			}
		}
	</script>
    <script src="js/process.js"></script>
</body>
</html>