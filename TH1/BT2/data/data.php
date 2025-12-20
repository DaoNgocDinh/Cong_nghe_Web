<?php
$questions = [

    [
        "question" => "Thành phần nào sau đây KHÔNG phải là một thành phần giao diện người dùng (UI) trong Android?",
        "options" => ["TextView", "Button", "Service", "ImageView"],
        "answer" => "C"
    ],

    [
        "question" => "Layout nào thường được sử dụng để sắp xếp các thành phần UI theo chiều dọc hoặc chiều ngang?",
        "options" => ["RelativeLayout", "LinearLayout", "FrameLayout", "ConstraintLayout"],
        "answer" => "B"
    ],

    [
        "question" => "Intent trong Android được sử dụng để làm gì?",
        "options" => ["Hiển thị thông báo", "Lưu trữ dữ liệu", "Khởi chạy Activity", "Xử lý sự kiện chạm"],
        "answer" => "C"
    ],

    [
        "question" => "Vòng đời của một Activity bắt đầu bằng phương thức nào?",
        "options" => ["onStart()", "onResume()", "onCreate()", "onPause()"],
        "answer" => "C"
    ],

    [
        "question" => "Để xử lý sự kiện click cho Button, bạn dùng phương thức nào?",
        "options" => ["onClick()", "onTouch()", "onLongClick()", "onFocusChange()"],
        "answer" => "A"
    ],

    [
        "question" => "Kiểu dữ liệu nào dùng để lưu true/false?",
        "options" => ["int", "float", "String", "boolean"],
        "answer" => "D"
    ],

    [
        "question" => "SharedPreferences dùng để làm gì?",
        "options" => ["Lưu dữ liệu cấu trúc", "Truy cập SQLite", "Lưu key-value", "Gửi dữ liệu mạng"],
        "answer" => "C"
    ],

    [
        "question" => "Toast trong Android dùng để làm gì?",
        "options" => ["Hiển thị hộp thoại", "Hiển thị thông báo ngắn", "Phát nhạc", "Chụp ảnh màn hình"],
        "answer" => "B"
    ],

    [
        "question" => "Để tạo ứng dụng Android, bạn dùng ngôn ngữ nào?",
        "options" => ["C++", "Python", "Java", "Kotlin"],
        "answer" => ["C", "D"]
    ],

    [
        "question" => "Adapter dùng để làm gì?",
        "options" => ["Kết nối dữ liệu với ListView/RecyclerView", "Tạo animation", "Xử lý sự kiện cảm ứng", "Lưu trữ dữ liệu"],
        "answer" => "A"
    ],

    [
        "question" => "Fragment trong Android là gì?",
        "options" => ["Activity con", "UI tái sử dụng", "Dịch vụ nền", "Kiểu dữ liệu"],
        "answer" => "B"
    ],

    [
        "question" => "RecyclerView là gì?",
        "options" => ["UI để hiển thị danh sách", "Một layout", "Lớp xử lý sự kiện", "Kiểu dữ liệu"],
        "answer" => "A"
    ],

    [
        "question" => "Manifest dùng để làm gì?",
        "options" => ["Khai báo thành phần", "Lưu dữ liệu", "Xử lý sự kiện", "Tạo giao diện"],
        "answer" => "A"
    ],

    [
        "question" => "Gradle là gì?",
        "options" => ["Quản lý dependencies", "Ngôn ngữ lập trình", "IDE", "Framework"],
        "answer" => "A"
    ],

    [
        "question" => "AsyncTask dùng để làm gì?",
        "options" => ["Xử lý tác vụ nền", "Tạo hiệu ứng", "Vẽ đồ họa", "Lưu dữ liệu"],
        "answer" => "A"
    ],

    [
        "question" => "ContentProvider dùng để làm gì?",
        "options" => ["Chia sẻ dữ liệu giữa ứng dụng", "Tạo UI", "Xử lý sự kiện", "Lưu trữ dữ liệu"],
        "answer" => "A"
    ],

    [
        "question" => "SQLite là gì?",
        "options" => ["Hệ QTCSDL", "Ngôn ngữ lập trình", "Framework", "IDE"],
        "answer" => "A"
    ],

    [
        "question" => "BroadcastReceiver dùng để làm gì?",
        "options" => ["Nhận thông báo từ hệ thống", "Gửi dữ liệu", "Tạo UI", "Xử lý sự kiện"],
        "answer" => "A"
    ],

    [
        "question" => "Service là gì?",
        "options" => ["Chạy nền", "Thành phần UI", "Kiểu dữ liệu", "Lớp xử lý sự kiện"],
        "answer" => "A"
    ],

    [
        "question" => "Thread là gì?",
        "options" => ["Luồng xử lý", "UI", "Kiểu dữ liệu", "Lớp xử lý sự kiện"],
        "answer" => "A"
    ],

    [
        "question" => "Activity Lifecycle là gì?",
        "options" => ["Vòng đời của Activity", "Vòng đời ứng dụng", "Tải dữ liệu", "Lưu dữ liệu"],
        "answer" => "A"
    ],

    [
        "question" => "LayoutInflater dùng để làm gì?",
        "options" => ["Tạo View từ XML", "Sắp xếp UI", "Xử lý sự kiện", "Lưu trữ dữ liệu"],
        "answer" => "A"
    ],

    [
        "question" => "Drawable là gì?",
        "options" => ["Tài nguyên đồ họa", "Thành phần UI", "Kiểu dữ liệu", "Lớp xử lý sự kiện"],
        "answer" => "A"
    ],

    [
        "question" => "dp là gì?",
        "options" => ["Đơn vị độc lập mật độ điểm ảnh", "Phụ thuộc mật độ", "Kiểu dữ liệu", "Lớp xử lý"],
        "answer" => "A"
    ],

    [
        "question" => "Định nghĩa màu sắc trong Android dùng kiểu nào?",
        "options" => ["Integer", "String", "Color", "Hexadecimal"],
        "answer" => ["C", "D"]
    ],

    [
        "question" => "ViewGroup là gì?",
        "options" => ["Lớp cơ sở layout", "Hiển thị ảnh", "Kiểu dữ liệu", "Lớp xử lý sự kiện"],
        "answer" => "A"
    ],

    [
        "question" => "match_parent trong layout_width nghĩa là gì?",
        "options" => ["Chiều rộng bằng thiết bị", "Chiều rộng bằng thành phần cha", "100dp", "Tự co giãn"],
        "answer" => "B"
    ],

    [
        "question" => "android:gravity dùng để làm gì?",
        "options" => ["Căn chỉnh nội dung", "Thay đổi vị trí UI", "Thay đổi kích thước", "Đổi màu"],
        "answer" => "A"
    ],

    [
        "question" => "AndroidManifest.xml nằm ở đâu?",
        "options" => ["/res", "/src", "Gốc project", "/assets"],
        "answer" => "C"
    ],

    [
        "question" => "Chạy ứng dụng trên thiết bị thật cần gì?",
        "options" => ["USB debugging", "Cài Android Studio", "adb install", "A và C"],
        "answer" => "A"
    ],

    [
        "question" => "dp và sp khác nhau thế nào?",
        "options" => ["dp độc lập DPI, sp phụ thuộc", "dp dùng cho font", "dp phụ thuộc DPI", "Giống nhau"],
        "answer" => "A"
    ],

    [
        "question" => "AlertDialog dùng để làm gì?",
        "options" => ["Hiển thị hộp thoại", "Thông báo ngắn", "Phát nhạc", "Chụp ảnh màn hình"],
        "answer" => "A"
    ],

    [
        "question" => "Intent Filter dùng để làm gì?",
        "options" => ["Lọc Intent", "Khai báo Activity xử lý Intent", "Khởi chạy Activity", "Lưu dữ liệu"],
        "answer" => "B"
    ],

    [
        "question" => "Serializable là gì?",
        "options" => ["Interface để lưu object", "Lưu dữ liệu", "Kiểu dữ liệu", "Xử lý sự kiện"],
        "answer" => "A"
    ],

    [
        "question" => "Khác nhau giữa ListView và RecyclerView?",
        "options" => [
            "RecyclerView hiệu quả hơn",
            "Hỗ trợ ViewHolder",
            "Linh hoạt hơn",
            "Tất cả đều đúng"
        ],
        "answer" => "D"
    ],

    [
        "question" => "ViewHolder pattern dùng để làm gì?",
        "options" => ["Tối ưu ListView/RecyclerView", "Lưu dữ liệu", "Xử lý sự kiện", "Tạo UI"],
        "answer" => "A"
    ],

    [
        "question" => "Data Binding là gì?",
        "options" => ["Kết nối dữ liệu với UI", "Lưu dữ liệu", "Kiểu dữ liệu", "Xử lý sự kiện"],
        "answer" => "A"
    ],

    [
        "question" => "MVVM là gì?",
        "options" => ["Kiến trúc phần mềm", "Ngôn ngữ", "Framework", "IDE"],
        "answer" => "A"
    ],

    [
        "question" => "Retrofit là gì?",
        "options" => ["Thư viện HTTP", "CSDL", "Framework", "IDE"],
        "answer" => "A"
    ],

    [
        "question" => "Gson là gì?",
        "options" => ["Thư viện JSON ↔ Object", "CSDL", "Framework", "IDE"],
        "answer" => "A"
    ],

    [
        "question" => "Picasso là gì?",
        "options" => ["Thư viện tải ảnh", "CSDL", "Framework", "IDE"],
        "answer" => "A"
    ],

    [
        "question" => "Firebase là gì?",
        "options" => ["Nền tảng di động", "CSDL", "Framework", "IDE"],
        "answer" => "A"
    ],

    [
        "question" => "ConstraintLayout là gì?",
        "options" => ["Layout linh hoạt", "Hiển thị danh sách", "Xử lý sự kiện", "Kiểu dữ liệu"],
        "answer" => "A"
    ],

    [
        "question" => "DataBinding giúp giảm code ở đâu?",
        "options" => ["XML", "Java/Kotlin", "Gradle", "Manifest"],
        "answer" => "B"
    ],

    [
        "question" => "ViewModel làm gì?",
        "options" => ["Lưu & quản lý data UI", "Hiển thị UI", "Xử lý sự kiện", "Tương tác DB"],
        "answer" => "A"
    ],

    [
        "question" => "LiveData là gì?",
        "options" => ["Giữ & quan sát dữ liệu", "Thành phần UI", "Kiểu dữ liệu", "Lớp xử lý sự kiện"],
        "answer" => "A"
    ],

    [
        "question" => "Room là gì?",
        "options" => ["ORM cho SQLite", "CSDL", "Framework", "IDE"],
        "answer" => "A"
    ],

    [
        "question" => "Jetpack Compose là gì?",
        "options" => ["Toolkit UI khai báo", "Ngôn ngữ", "Framework", "IDE"],
        "answer" => "A"
    ],

    [
        "question" => "Thành phần nào dùng để hiển thị danh sách?",
        "options" => ["TextView", "ListView", "ImageView", "RecyclerView"],
        "answer" => ["B", "D"]
    ],

    [
        "question" => "Phát biểu đúng về Intent:",
        "options" => [
            "Truyền dữ liệu giữa Activity",
            "Chỉ dùng để mở Activity",
            "Khởi chạy Service",
            "Không thể chứa dữ liệu"
        ],
        "answer" => ["A", "C"]
    ],

    [
        "question" => "Những phương thức thuộc vòng đời Activity",
        "options" => ["onCreate()", "onClick()", "onStart()", "onResume()", "onDestroy()"],
        "answer" => ["A", "C", "D", "E"]
    ],

    [
        "question" => "Thư viện nào dùng nhiều trong Android?",
        "options" => ["Retrofit", "Gson", "Picasso", "jQuery"],
        "answer" => ["A", "B", "C"]
    ],

    [
        "question" => "Lợi ích của ConstraintLayout",
        "options" => ["Giảm lồng layout", "Cải thiện hiệu năng", "Dễ tạo hiệu ứng", "Code dễ đọc"],
        "answer" => ["A", "B"]
    ],

    [
        "question" => "Thành phần nào thuộc MVVM?",
        "options" => ["Model", "View", "Controller", "ViewModel"],
        "answer" => ["A", "B", "D"]
    ],

    [
        "question" => "Công cụ debug Android",
        "options" => ["Debugger", "Logcat", "ADB", "Git"],
        "answer" => ["A", "B", "C"]
    ],

    [
        "question" => "Kỹ thuật tối ưu hiệu năng",
        "options" => ["ViewHolder", "AsyncTask", "Giảm bộ nhớ", "Tối ưu hình ảnh"],
        "answer" => ["A", "B", "C", "D"]
    ],

    [
        "question" => "Khái niệm liên quan lưu trữ dữ liệu",
        "options" => ["SharedPreferences", "SQLite", "ContentProvider", "Intent"],
        "answer" => ["A", "B", "C"]
    ]

];
?>
