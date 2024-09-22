-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 03, 2024 lúc 11:40 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `login_register`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `category_name`, `des`) VALUES
(2, 'Football', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'Badminton', 'description 2'),
(4, 'Basketball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(5, 'Baseball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(6, 'Swimming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(8, 'Volleyball', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(9, 'Other Sports', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`) VALUES
(1, 'Nguyen', 'Khoi', 'issacoldton@gmail.com', 'Toi muon cai thien lai giao dien', 'web bạn có màu cam, tôi không thích, chuyển sang đỏ nhé'),
(3, 'Vo', 'Danh', 'toikhongphailatoi@gmail.com', 'day la mail spam', 'day la mail spam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `date`, `category`, `thumbnail`) VALUES
(2, 'Palmer lập cú đúp trong ngày Chelsea chia điểm tệ hại', ' Dù có lợi thế hơn người trong phần lớn thời gian nhưng Chelsea chỉ có được một kết quả hòa trước Burnley.', ' Burnley cực kỳ quyết tâm trong cuộc chiến thoát khỏi khu vực cầm đèn đỏ. Tuy nhiên, xét về lực lượng, Chelsea rõ ràng vượt trội so với đối thủ. Phút 23 của trận đấu, Chelsea tưởng chừng đã mở tỷ số với pha lập công ở cực ly gần của Axel Disasi.<br>Tuy nhiên, VAR đã vào cuộc và bàn thắng không được công nhận vì bóng đã chạm tay Disasi. <br> Áp lực của Chelsea cuối cùng được đền đáp bằng một quả phạt đền ở phút 44. Hậu vệ Lorenz Assignon nhận thẻ vàng thứ hai và phải rời sân. <br> HLV Kompany vì phản ứng với quyết định của trọng tài cũng bị truất quyền chỉ đạo. <br> Trong tình thế khó khăn, cái tên Palmer một lần nữa tỏa sáng. Phút 78, nhận đường chuyền thông minh của Raheem Sterling, Palmer băng xuống và dứt điểm lạnh lùng về góc phải khung thành.<br>Tuy nhiên, niềm vui của NHM Chelsea chỉ kéo dài đúng 3 phút. Từ tình huống đá phạt góc, Dara O `Shea bật cao đánh đầu tung lưới Chelsea. Hòa 2-2, Chelsea chỉ biết tự trách chính mình khi phung phí quá nhiều cơ hội. Trong khi đó, Burnley níu kéo một chút hy vọng có thể ở lại Premier League mùa sau.', '2024-03-31', 'Football', 'news1img1.png'),
(3, 'Từ chối 61 PTS của Brunson, Victor Wembanyama sánh ngang huyền thoại Shaq với bộ chỉ số khủng', 'Victor Wembanyama đã chơi trận đấu cá nhân xuất sắc nhất mùa giải năm nay,  từ chối 61 điểm từ hậu vệ All-Star Jalen Brunson để đưa San Antonio Spurs đến chiến thắng cảm xúc.', 'Jalen Brunson tiếp tục chứng tỏ anh là một trong số những hậu vệ có khả năng ghi điểm tốt nhất NBA mùa này, ghi đến 61 điểm để suýt quân bình kỷ lục CLB New York Knicks trong trận đấu diễn ra sáng ngày 30/3.\r\n\r\nThế nhưng chừng đó nỗ lực của Brunson vẫn chưa đủ với “cơn thịnh nộ\" mang tên Victor Wembanyama, tân binh “kỳ lân\" người Pháp đã rực sáng để đưa San Antonio Spurs đến chiến thắng hiệp phụ 130-126.\r\nCon số 61 điểm Jalen Brunson rất “khủng\". Nhưng bên kia sân, Wembanyama có trận đấu xuất sắc không kém với 40 điểm, 20 rebounds và còn có thêm 7 kiến tạo, 2 steals và 1 block.\r\n\r\nĐây là lần đầu tiên sau 31 năm, NBA mới chứng kiến một tân binh ghi được 40 điểm và 20 rebounds trong một trận đấu, điều trước đó từng được chinh phục bởi huyền thoại Shaquille O\'Neal từ năm 1993.\r\nBên cạnh màn so tài mãn nhãn giữa hai ngôi sao chơi ở hai vị trí khác nhau, trận đấu còn chứng kiến hai đội rượt đuổi tỷ số đầy kịch tính.\r\n\r\nSự xuất sắc của Brunson giúp New York Knicks xoá bỏ cách biệt 18 điểm giữa giờ và vươn lên dẫn ngược lại Spurs ở cuối hiệp 4 (121-119 khi thời gian thi đấu chính thức còn hơn 1 phút).\r\n\r\nNhưng ngay sau đó, Wembanyama đã có 2 quả phạt “clutch\" để quân bình tỷ số và đưa trận đấu vào hiệp phụ.', '2024-03-31', 'Basketball', 'news2img1.jpg'),
(4, 'Messi bị loại khỏi trận đấu giữa Inter Miami và New York FC', 'Inter Miami đã đưa ra thông báo về Lionel Messi trước trận đấu với New York FC, điều khiến người hâm mộ một lần nữa phải chờ đợi ngôi sao của mình trở lại.', 'Javier Morales, trợ lý của HLV Gerardo Martino, xác nhận trong cuộc họp báo rằng Messi sẽ không có mặt trong trận đấu tiếp theo.<br>Inter Miami sẽ đối đầu với New York FC thuộc vòng 7 MLS. Trong bối cảnh đó, Messi với chấn thương cơ chưa bình phục hoàn toàn sẽ không góp mặt.<br>“Anh ấy đang làm việc với các nhà vật lý trị liệu nhưng bị loại vào ngày mai. Anh ấy sẽ không có mặt vì chúng tôi đang cố gắng hết sức để anh ấy có mặt vào thứ Tư tới với Monterrey trên sân nhà. Vâng, có khả năng anh ấy sẽ chơi ở đó, chúng tôi đang làm việc vì điều đó, anh ấy đang làm việc vì điều đó với các nhân viên y tế”, Morales nói.<br>Vào ngày 14/3, Messi được thay ra trong trận lượt về vòng 1/8 Concachampions với Nashville do bị khó chịu ở gân kheo bên phải. Chấn thương cơ đã được khẳng định và đó là lý do anh vắng mặt ở 2 trận tiếp theo gặp DC United (thắng 3-1 khi làm khách) và New York Red Bulls (thất bại 0-4 cũng trên sân khách). Đây sẽ là trận thứ ba mà La Pulga ngồi bên ngoài khi mọi thứ đều chỉ ra rằng sự trở lại của anh là để thi đấu cấp châu lục.', '2024-03-30', 'Football', 'news3img1.jpg'),
(5, 'Arteta tuyên bố sẽ ủng hộ Kai Havertz bằng mọi giá', 'HLV Mikel Arteta khẳng định ông sẽ tiếp tục ủng hộ Kai Havertz kể cả khi tiền đạo này mắc sai lầm.', 'Arsenal đã gây bất ngờ khi bỏ ra 65 triệu Bảng để chiêu mộ Kai Havertz từ Chelsea. Mikel Arteta xác định cầu thủ người Đức là mục tiêu hàng đầu để nâng cấp đội hình của Arsenal.\r\nSau một giai đoạn khó khăn, niềm tin đặt vào Kai Havertz đã thu về quả ngọt. Kể từ khi bước sang năm 2024, Havertz thi đấu cực kỳ ấn tượng và bắt đầu đem lại bàn thắng cũng như kiến tạo cho câu lạc bộ.\r\nArteta xem Kai Havertz là một cầu thủ có thể tỏa sáng ở những trận đấu lớn. Havertz cũng đã gây ấn tượng ở những trận thắng trước Man City và Liverpool ở mùa giải này. Vào cuối tuần này, Arsenal sẽ bước vào một trận đấu mang tính định đoạt mùa giải trên sân của Man City. Và HLV Arteta tin rằng Kai Havertz có thể tiếp tục tỏa sáng cho Arsenal.\r\n\r\n“Với tôi, điều quan trọng nhất là các cầu thủ cảm thấy chúng tôi tin tưởng họ, rằng chúng tôi bảo vệ họ, rằng chúng tôi yêu quý họ.\r\n\r\nHọ cũng được phép mắc sai lầm, và quan điểm của chúng tôi sẽ không thay đổi vì điều đó, nhất là khi bạn nhìn một cầu thủ như Kai Havertz tập luyện và cố gắng mỗi ngày”.\r\n\r\nKai Havertz và các đồng đội sẽ có một lịch thi đấu khó khăn khi bước vào giai đoạn then chốt của mùa giải. Sau trận đại chiến với Man City, Arsenal sẽ chơi 8 trận trong tháng 4, trong đó có 2 trận đấu quan trọng với Bayern Munich ở tứ kết Champions League.', '2024-03-30', 'Football', 'news4img1.png'),
(7, '“Khi M.U ghi bàn, đó là một cú đấm vào mặt toàn đội', 'Trao đổi với trang web chính thức của Brentford, Kristoffer Ajer đã đưa ra các nhận định về trận hòa Manchester United.', 'Phát biểu sau trận hòa Manchester United, Kristoffer Ajer khẳng định Brentford đã trải qua một trận đấu điên rồ, và đồng thời cũng là một trong những màn thể hiện xuất sắc nhất của đội ở Premier League. Trung vệ người Na Uy chia sẻ:\r\n\r\n\"Đó là một trận đấu điên rồ. Chúng tôi đã chơi một trong những trận đấu hay nhất ở Premier League, tạo ra rất nhiều cơ hội. Vào một ngày khác, chúng tôi đã giành chiến thắng khá thoải mái.\"\r\n“Khi họ ghi bàn thắng dẫn trước, đó là một cú đấm vào mặt toàn đội. Nhưng may mắn là chúng tôi đã có được bàn gỡ hòa.”\r\n\r\n\"2 bàn thắng trong 2 trận liên tiếp, có vẻ không giống tôi lắm. Thật tuyệt vời khi ăn mừng một bàn thắng thực sự xứng đáng. Chúng tôi đã chiến đấu trong suốt cả trận để ghi bàn, nên chúng tôi cần phải ăn mừng.\"\r\n\r\n“Chúng tôi phòng ngự rất tốt, đó là điều quan trọng nhất. Để thủng lưới là một bàn thua kém may mắn.\"\r\n\r\n“Tâm lý của toàn đội thật tuyệt vời. Thật khó khăn khi thủng lưới, nhưng tôi biết chúng tôi sẽ tạo ra nhiều cơ hội hơn.\" ', '2024-03-31', 'Football', 'news5img1.jpg'),
(9, 'Bại trận trước Dortmund, Bayern Munich hết cơ hội vô địch Bundesliga', 'Giấc mơ vô địch Bundesliga mùa giải này của Harry Kane cũng như Bayern Munich gần như tan thành mây khói khi để thua Dortmund ngay trên sân nhà Allianz Arena ở vòng 27.', 'Bayern Munich đã chịu áp lực tâm lý khi chứng kiến đội dẫn đầu Bundesliga, Bayer Leverkusen giành chiến thắng ngược dòng trước Hoffenheim ở trận đấu sớm thuộc vòng 27 Bundesliga diễn ra vào tối 30/3 (giờ Việt Nam).\r\n\r\nĐoàn quân của HLV Thomas Tuchel nhập cuộc không tốt trước đội khách Borussia Dortmund và sớm bị dẫn bàn chỉ sau 10 phút bóng lăn. Từ pha phản công nhanh bên phần sân nhà, Brand chuyền bóng cho Karim Adeyemi lao vào vòng cấm dứt điểm đánh bại thủ thành Sven Ulreich. \r\nĐây cũng là lần đầu tiên sau 10 năm Dortmund có bàn thắng dẫn trước Bayern Munich trong hiệp 1. Sau khi bị thủng lưới trước, đội chủ nhà Bayern Munich nỗ lực tìm kiếm bàn thắng gỡ hòa trong những phút còn lại của hiệp 1 nhưng bất thành.\r\n\r\nBước sang hiệp 2, đội chủ nhà tiếp tục dâng cao đội hình để tìm kiếm bàn thắng, nhưng lại bị dội gáo nước lạnh ở phút 83 khi Julian Ryerson ghi bàn thắng ấn định chiến thắng 2-0 cho Dortmund.\r\n\r\nTiền đạo được kỳ vọng là Harry Kane đã có rất nhiều cơ hội để giúp Bayern Munich lật ngược tình thế nhưng anh đều không tận dụng thành công. Thậm chí ở phút cuối của hiệp 1, Harry Kane đã đưa được bóng vào lưới Dortmund nhưng lại bị công nghệ VAR từ chối do lỗi việt vị.', '2024-03-31', 'Football', 'news6img1.jpg'),
(10, 'Roy Keane: \'Haaland đá như cầu thủ giải hạng Tư\'', 'Cựu tiền vệ Man Utd Roy Keane chỉ trích Erling Haaland thi đấu mờ nhạt như là một cầu thủ hạng dưới trong trận Man City hòa Arsenal 0-0 ở vòng 30 Ngoại hạng Anh.', 'Màn trình diễn của Haaland rất tệ, và đây không phải là trận duy nhất, Keane bình luận trên Sky Sports tối 31/3. Khi đối diện với cầu môn đối phương, khả năng làm tường hay đánh đầu của Haaland là tốt nhất thế giới. Nhưng khả năng đóng góp vào lối chơi thì quá tệ. Haaland gần giống cầu thủ từ League Two, và phải cải thiện. Trong hệ thống bóng đá Anh, dưới Premier League (Ngoại hạng Anh), lần lượt là Championship, League One và League Two. Trên sân Etihad hôm qua, Haaland đá trọn 90 phút, dứt điểm bốn lần với hai cú chệch mục tiêu và hai cú bị chặn, chạm bóng 23 lần và mất bóng bảy lần. Số lần chạm bóng của tiền đạo Na Uy ít hơn phân nửa so với thủ môn hai đội, trong đó đồng đội Stefan Ortega là 42 lần và David Raya là 44 lần. Haaland lỡ cơ hội ngon ăn nhất của Man City ở phút 84. Từ quả đá phạt góc của Kevin de Bruyne, Josko Gvardiol đánh đầu chuyền cho Haaland băng vào dứt điểm. Nhưng tiền đạo Na Uy đệm hụt từ cự ly khoảng 3 m. Trên Sky Sports, Gary Neville gần như không nói nên lời khi chứng kiến pha bỏ lỡ của Haaland. Sau một hồi, cựu hậu vệ Man Utd mỉa mai: Có vẻ Haaland chưa từng chơi bóng trước đây. Mùa này, Haaland chỉ ghi chín bàn qua 15 trận đầu. Anh chấn thương bàn chân, phải nghỉ 10 trận trên mọi đấu trường vào cuối năm 2023 và chưa tìm lại phong độ tốt nhất. Kể từ đó, tiền đạo 23 tuổi chỉ nổ súng ở ba trong chín trận và chỉ lập một cú đúp. Anh cũng hứng chỉ trích khi lỡ cơ hội ghi bàn từ khoảng cách chỉ hơn một mét trong trận Man City thắng Man Utd 3-1 ở vòng 27 Ngoại hạng Anh. Trong mùa đầu tiên khoác áo Man City, Haaland bùng nổ khi ghi 52 bàn qua 53 trận trên mọi đấu trường. Trong đó, với 36 bàn, anh phá kỷ lục ghi nhiều bàn nhất trong một mùa tại Ngoại hạng Anh. 12 bàn khác giúp tiền đạo Na Uy đoạt Vua phá lưới Champions League. Dù vậy, Haaland thường mờ nhạt và tịt ngòi trong cả ba trận quyết định danh hiệu của Man City. Đầu tiên là trận thua Liverpool 1-3 ở Siêu Cup Anh 2022, cũng là trận ra mắt Man City hồi tháng 7 năm ngoái. Trận này, Haaland chỉ chạm bóng 16 lần và phung phí cơ hội đá bồi cận thành ở phút bù giờ. Đến trận chung kết Cup FA - nơi Man City thắng Man Utd 2-1 nhờ cú đúp của Gundogan, Haaland cũng im tiếng, chỉ chạm bóng 35 lần và dứt điểm ba cú. Thông số này giảm xuống còn 19 lần chạm bóng và một cú sút ở chung kết Champions League gặp Inter Milan trên sân Ataturk, Istanbul, Thổ Nhĩ Kỳ.', '2024-04-01', 'Football', 'news7img2.jpg'),
(11, 'Chỉ Liverpool có quyền tự quyết vô địch Ngoại hạng Anh', 'Trận hòa giữa Man City và Arsenal khiến cả hai đội mất quyền tự quyết vào tay Liverpool, trong cuộc đua vô địch Ngoại hạng Anh.', 'Sau vòng 30, Liverpool, Arsenal và Man City cùng đã chơi 29 trận, lần lượt giành 67, 65 và 64 điểm. Do ba đội không còn gặp nhau trong chín trận còn lại, chỉ Liverpool nắm được quyền tự quyết. Điều đó có nghĩa nếu toàn thắng chín trận cuối, thầy trò Jurgen Klopp sẽ soán ngôi vô địch của Man City.\r\nNếu không tính hai trận gặp chính Arsenal và Man City gần đây, Liverpool đã thắng chín trận liên tiếp. Ngoài Arsenal và Man City, Liverpool cũng chỉ một lần rơi điểm trên sân Anfield - trận hòa Man Utd 0-0 ở vòng 17.\r\n\r\nSiêu máy của Opta chạy mô phỏng 10.000 lần kết quả chín trận còn lại của ba đội này, cho thấy xác suất Liverpool vô địch lên tới 47,7%. Tỷ lệ này tăng 12,4% so với trước trận Man City hòa Arsenal. 12,4% cũng là mức giảm khả năng vô địch của Man City sau trận này, xuống còn 33,5%. Trong khi, Arsenal chỉ có 18,8% cơ hội vô địch.\r\n\r\nTuy nhiên, lịch đấu còn lại của Liverpool không đơn giản, khi họ phải gặp cả ba đội còn lại trong top 6, là Man Utd trên sân Old Trafford, Tottenham tại Anfield và Aston Villa ở Villa Park. Một trong hai thất bại của Liverpool mùa này diễn ra dưới tay Tottenham, trong trận cầu nhiều tranh cãi.\r\n\r\nArsenal cũng vẫn còn phải gặp ba đội trong Top 6, trong đó có cuộc đón tiếp Aston Villa, và hai chuyến làm khách đến Tottenham và Man Utd. Ngoài ra, thầy trò Mikel Arteta cũng còn hai trận sân khách được dự báo khó khăn trước Brighton và Wolverhampton.\r\n\r\nMan City đang thất thế trong cuộc đua bảo vệ ngôi vương, nhưng họ chỉ còn phải gặp hai đội trong Top 6, trong đó có trận tiếp theo gặp Aston Villa tối 3/4. Ngay cả khi thắng trận tiếp theo, còn Liverpool và Arsenal cùng thua, thầy trò Pep Guardiola cũng chưa chắc đòi lại được đỉnh bảng do đang kém hiệu số bàn thắng bại.', '2024-04-01', 'Football', 'news8img1.jpg'),
(12, 'Tín hiệu vui cho bơi lội TP.HCM', 'Trong vòng 3 năm (từ 2023 đến 2026), đội tuyển bơi lặn của TP.HCM sẽ nhận được 1,8 tỉ đồng tài trợ hoạt động tập luyện, thi đấu... Đây là tín hiệu vui cho bơi lội TP.HCM.', 'Trong quá khứ, từng có những VĐV bơi lặn của thành phố được các đơn vị, doanh nghiệp ký kết hợp đồng tài trợ cho việc tập luyện, thi đấu, thậm chí là tập huấn nước ngoài. Nhưng các hợp đồng này chỉ mang tính cá nhân, chưa đại diện cho tập thể. Còn lần này, tiền sẽ chuyển cho liên đoàn để sử dụng vào các mục đích: hỗ trợ VĐV xuất sắc, khen thưởng những người có thành tích ở các giải đấu trong nước và quốc tế. Bên cạnh đó, tùy vào thực tế phát sinh, bộ môn bơi lặn sẽ đề xuất tài trợ cho các chương trình tập huấn, thi đấu quốc tế...`Có thể nói đây là hợp đồng lịch sử vì trước đây, chúng tôi chưa từng làm điều này`, chủ tịch Liên đoàn Thể thao dưới nước TP.HCM Trần Mạnh Út chia sẻ với Tuổi Trẻ tại lễ ký kết tài trợ hôm 2-12. Trước mắt, 4 kình ngư xuất sắc nhất của thành phố là Jeremie Loic Lương, Trần Duy Khôi, Nguyễn Diệp Phương Trâm và Nguyễn Thành Lộc sẽ nhận hỗ trợ 5 triệu đồng/tháng. Hỗ trợ này được trích từ số tiền tài trợ mà liên đoàn vừa nhận được. Về lâu dài, việc sử dụng hiệu quả nguồn lực tài trợ này trong vòng 3 năm tới sẽ được liên đoàn lên kế hoạch cụ thể. Đến kịp lúc. Là môn thể thao Olympic, bơi lội luôn dành được nhiều sự chú ý ở các kỳ đại hội thể thao. Trước đây, TP.HCM từng có nhiều đóng góp cho đội tuyển bơi Việt Nam nhưng vài năm gần đây lại có dấu hiệu chững lại. Cụ thể, gần như chỉ có kình ngư Việt kiều Jeremie Loic Lương là người thường xuyên được gọi vào đội tuyển. Thành tích của tuyển bơi TP.HCM cũng vấp phải sự cạnh tranh dữ dội từ các đơn vị như Quân đội, Quảng Bình, An Giang...Như ở Giải vô địch bơi quốc gia 2023 hồi tháng 10 vừa rồi, đội bơi TP.HCM giành được 8 HCV, 11 HCB và 14 HCĐ, xếp thứ 3 toàn đoàn. Dù đội bơi TP.HCM vẫn nằm trong tốp đầu, nhưng nếu không có sự đầu tư kịp thời sẽ rất dễ bị các đơn vị khác vượt mặt. Do đó, gói tài trợ 1,8 tỉ đồng lần này đến vào thời điểm quan trọng. Ông Trần Mạnh Út chia sẻ: `Việc ký kết hợp đồng lần này sẽ giúp đội tuyển bơi lặn thành phố trước mắt là ổn định về thành tích. Đây cũng là thời điểm thích hợp để đầu tư nhiều hơn nữa, mạnh hơn nữa để gặt hái thành tích xứng đáng với tên tuổi của thành phố`.', '2024-04-01', 'Swimming', 'news9img1.jpg'),
(13, 'LeBron James hoá thân thành Curry với 9 quả 3 điểm, sánh vai cùng Jordan với trận đấu kỷ lục', 'LeBron James trong ngày khát khao chiến thắng hơn bao giờ hết đã hoá thân thành xạ thủ Stephen Curry, ném vào đến 9 quả 3 điểm trong một trận đấu', 'Ném vào 9 quả 3 điểm trong 10 lần thử sức ở một trận đấu vốn không phải chỉ số người ta thường thấy ở LeBron James, thay vào đó là Stephen Curry hoặc những ngôi sao chuyên ném xa khác tại NBA.\r\n\r\nThế nhưng LeBron một lần nữa đã cho thấy anh là cầu thủ vĩ đại và đa năng như thế nào. Ở tuổi 39, siêu sao Los Angeles Lakers vừa có trận đấu ném vào 9 quả 3 điểm, ghi tổng cộng 40 điểm để đưa đội bóng áo vàng tím đến chiến thắng 116-104 ngay trên sân của Brooklyn Nets.\r\nGhi đến 40 điểm với 9 quả 3 điểm thành công trước Brooklyn Nets, LeBron James đã quân bình mức career-high số lần ném xa trong cả sự nghiệp. Nhưng khác với bộ chỉ số 9-14 3PT lần trước (đối đầu LA Clippers mùa giải 2022-23), LeBron lần này hiệu quả hơn rất nhiều với tỷ lệ thành công lên đến 90%, đạt 9-10 3PT.\r\n\r\nGiờ đây James trở thành cầu thủ thứ hai trong lịch sử Los Angeles Lakers có nhiều lần cán mốc 9 quả 3 điểm trong một trận đấu. Cố huyền thoại Kobe Bryant là người duy nhất còn lại với 4 trận như vậy.\r\n\r\nNgoài ra, LeBron còn sánh vai với huyền thoại Michael Jordan để trở thành hai cái tên hiếm hoi trong lịch sử NBA có nhiều trận đấu ghi 40 điểm ở tuổi 39 trở lên. Trong khi James đã có 2 trận cán mốc 40 điểm thì Jordan có 3 trận.\r\n\r\nBên cạnh màn toả sáng của LeBron James, Los Angeles Lakers có sự đóng góp đồng đều từ cả 4 cái tên còn lại trong đội hình xuất phát.\r\n\r\nAnthony Davis có double-double 24 điểm, 14 rebounds và 3 blocks. Rui Hachimura có 20 điểm cùng 10 rebounds. D\'Angelo Russell và Austin Reaves lần lượt ghi 18 và 12 điểm.\r\n\r\nĐiều thú vị trong trận đấu này là đội hình dự bị của Lakers gần như “tàng hình toàn tập\". Trong số 116 điểm được ghi cả trận, 5 cầu thủ xuất phát của LA đã ghi đến 114 điểm.\r\n\r\nHai điểm hiếm hoi đến từ đội hình phụ là của Gabe Vincent, tay ném vừa trở lại sau 5 tháng ngồi ngoài vì chấn thương đầu gối.', '2024-04-01', 'Basketball', 'news10img1.jpg'),
(14, 'Chuyển nhượng NBA: Liệu hậu vệ All-Star, All-NBA Donovan Mitchell có chia tay Cleveland Cavaliers?', 'Trong lúc Cleveland Cavaliers tự tin về việc trói chân Donovan Mitchell thì tuyển thủ từng 5 lần vào All-Star và 1 lần All-NBA vẫn không cam kết bất kỳ điều gì.', 'Phải mất 4 năm sau kỷ nguyên LeBron James (kết thúc vào cuối mùa giải 2017-18), Cleveland Cavaliers mới tìm lại được hào quang của một trong những đội bóng hàng đầu giải đấu. Trong hai mùa giải gần nhất, Cavaliers đều đứng trong top-4 đội mạnh nhất miền Đông và có suất vào thẳng Playoffs. Riêng mùa này họ đang đứng vị trí thứ 3 với thành tích 45-29, theo sát đội hạng nhì là Milwaukee Bucks (thành tích 47-27). Nếu để chọn ra một cái tên đã góp công lớn giúp Cleveland xoay chuyển từ đội 4 năm liên tiếp ngồi nhà xem Playoffs trở lại vị trí nhóm dẫn đầu BXH miền, đó chắc chắn phải là hậu vệ All-Star Donovan Mitchell. Trong hai năm khoác áo Cavaliers, Mitchell đang có trung bình 27,8 điểm cùng 5,1 assists 4,7 rebounds và 1,6 steals mỗi trận. Cầu thủ sinh năm 1996 lọt vào All-Star trong cả hai mùa giải, đồng thời được vinh danh ở đội hình tiêu biểu All-NBA 2nd Team mùa trước. Năm nay Donovan Mitchell sẽ khó đoạt danh hiệu cá nhân do mới chỉ ra sân 50 trận vì chấn thương (không đủ cột mốc 65 trận do NBA đề ra). Tuy vậy, anh vẫn là ngôi sao số 1 của CLB với hơn 27 PPG và 6 APG cả mùa. Tầm ảnh hưởng của Donovan Mitchell tại Cleveland Cavaliers là điều không có gì phải bàn cãi. Tuy nhiên câu chuyện tương lai giữa anh và đội bóng lại là một vấn đề hoàn toàn khác. Tổng hợp từ hai chuyên trang uy tín là The Athletic và ESPN, Donovan Mitchell đang lọt tầm ngắm của một vài ông lớn, cụ thể là Los Angeles Lakers, New York Knicks và Brooklyn Nets. Cũng theo ESPN, Mitchell có thể ký gia hạn khủng với Cleveland Cavaliers ngay lúc này bằng bản hợp đồng 4 năm trị giá khoảng hơn 200 triệu đô la Mỹ. Thế nhưng việc anh lưỡng lự trong khâu đàm phán và gia hạn hợp đồng đang tạo cơ hội để thị trường bàn tán.', '2024-03-31', 'Basketball', 'news11img1.jpg'),
(15, 'Cựu số 1 cầu lông thế giới Ratchanok Intanon củng cố suất hạt giống Olympic bằng ngôi vô địch Spain Masters', 'Ratchanok Intanon, niềm tự hào của cầu lông Thái Lan, đã giành chiến thắng tại chung kết đơn nự Madrid Spain Masters trước đồng hương Supanida Kaethong.', 'Hiện xếp thứ 14 thế giới và tạm giữ suất hạt giống thứ 12 trong tổng số 14 của cầu lông đơn nữ Olympic Paris 2024, cựu số 1 thế giới Ratchanok Intanon của Thái Lan vừa củng cố vững chắc vị thế trên đường đua nước rút tới Pháp bằng chiến thắng đồng hương Supanida Kaethong ở chung kết đơn nữ Spain Masters 2024 bằng màn trình diễn giàu kỹ thuật cùng quyết tâm rõ rệt.\r\n\r\nĐây cũng là danh hiệu đầu tiên mà Ratchanok giành được kể từ Malaysia Open 2022. Với màn trình diễn xuất sắc khiến khán giả phải kinh ngạc, cô đã kiếm được vương miện thứ 6 tại BWF World Tour, củng cố vị thế là một trong những tay vợt đáng gờm nhất của cầu lông thế giới.\r\nTrận chung kết tại Madrid Spain Masters là cuộc đọ sức giữa Ratchanok với đồng hương Supanida, người đang cạnh tranh một suất tham dự Thế vận hội sắp tới. Khi hai vận động viên bước ra sân, không khí háo hức chờ đợi đến từ những người hâm mộ mong ngóng trận đấu toàn Thái Lan. Và ngay từ pha giao cầu mở màn, Ratchanok đã thể hiện rõ quyết tâm giành lấy chiến thắng.\r\n\r\nRatchanok đã thống trị trận đấu ngay từ đầu, thể hiện sự pha trộn đặc trưng giữa sức mạnh, độ chính xác và sự khéo léo. Những cú đánh của cô ấy được thực hiện với độ chính xác của bác sĩ phẫu thuật, tìm ra điểm rơi của chúng với độ chính xác gần như tuyệt đối, trong khi bộ chân của cô ấy thể hiện mức độ nhanh nhẹn gần như siêu phàm. Với mỗi pha cầu, Ratchanok tạo ra động lực, khiến Supanida phải chật vật để theo kịp sự tấn công không ngừng nghỉ của cựu số 1 thế giới.\r\n\r\nKhi trận đấu diễn ra, sự tự tin của Ratchanok dường như tăng lên, mọi bước đi của cô đều được tính toán một cách hoàn hảo. Với lợi thế dẫn trước trong cả hai set, cô vẫn giữ được bình tĩnh, không chịu bỏ cuộc cho đến khi giành được điểm cuối cùng. Và khi khoảnh khắc đó đến, đó là minh chứng không chỉ cho kỹ năng trên sân của cô, mà còn cho sự quyết tâm và cống hiến không ngừng nghỉ cho nghề của cô. Cô ấy chiếm ưu thế 21-12, 21-9.', '2024-04-01', 'Badminton', 'news12img1.jpg'),
(16, 'Soto the alpha \'dawg\' again as Yankees stay perfect', 'Red-hot star hits go-ahead single in ninth for New York, 4-0 for first time since 2003', 'HOUSTON -- The Yankees have probably learned a hundred things about Juan Soto since the first day he tried on their uniform, but one frequently discussed topic is the intensity with which he treats every at-bat. Each trip to home plate is a battle, and as his teammates have marveled, he seldom gives away a single pitch.\r\n\r\nWith the game on the line Sunday afternoon, there was no one the Yankees would have rather had in the batter’s box. Soto delivered again, lashing a go-ahead ninth-inning single off Josh Hader that helped power a 4-3 win over the Astros at Minute Maid Park, securing a sweep of the four-game series.\r\nSoto became the first Yankees player in the expansion era (since 1961) to post a go-ahead RBI in three of his first four games with the club.\r\n\r\n“You feel good when he’s up there,” said Alex Verdugo, who sealed the victory with a sliding catch in the home half of the ninth. “He’s really special. It doesn’t matter; lefty, righty, the way he controls the zone, knows himself and doesn’t let the moment get too big.\r\n\r\n“ … He’s a dawg. Just put it like that, he’s a dawg, bro. I can’t say [anything] else. We’re dawgs out here.”\r\n\r\nHere’s something to bark about: The Yankees have opened a season 4-0 for the 12th time in franchise history, the first time they’ve done so since 2003. New York has also won seven consecutive games at Minute Maid Park, dating to last September.\r\n“It’s eerily similar to how we were in 2022, when we started off good,” said Clarke Schmidt, who permitted three runs over 5 1/3 innings in his season debut. “We just felt like we weren’t going to lose at the end of games. We were always going to come back, always in it.\r\n\r\n“… You don’t really play playoff games in March, but this was a big-time series and a big-time sweep.”', '2024-03-31', 'Baseball', 'news13img1.jpg'),
(17, 'Argentina lần thứ 3 vô địch trong kỳ World Cup cuối cùng của Messi', 'Sau 120 phút thi đấu, trận chung kết World Cup 2022 giữa Argentina và Pháp khép lại bằng loạt sút luân lưu 11 m và chiến thắng \"mỉm cười\" với đội bóng Nam Mỹ. Argentina lần thứ 3 vô địch thế giới trong kỳ World Cup cuối cùng của Mess', 'Đêm 18/12, hơn 90.000 người trên khán đài SVĐ Lusail cùng hàng triệu người trên toàn thế giới chứng kiến 2 sự kiện lớn nhất của bóng đá: Lễ bế mạc và trận chung kết World Cup 2022.\r\n\r\nSau chừng 15 phút của lễ bế mạc, trận đấu tranh Cúp vàng 2022 giữa đương kim vô địch Pháp và ĐT Argentina bắt đầu.\r\n\r\nTrận đấu diễn ra với thế lấn lướt của Argentina khi đồng đội của Messi chơi bóng nhanh, phòng ngự cực tốt nên nhà đương kim vô địch không thê triển khai bóng và chơi bế tắc.\r\n\r\nSuốt 20 phút đầu hiệp 1, các cầu thủ Argentina làm chủ trận đấu buộc ĐT Pháp phải chơi lùi sâu về phía sân nhà. Cùng khoảng thời gian này, Mbappe chỉ chạm bóng vài lần và không gây nguy hiểm gì cho đối thủ.\r\n\r\nBước ngoặt trận đấu đến vào phút 21 (hiệp 1), Di Maria của Argentina bị cầu thủ Pháp chèn ngã trong vòng cấm và Argentina được hưởng quả phạt 11 m.\r\n\r\nMessi thực hiện quả phạt đền chuẩn xác và mở tỉ số trận đấu vào phút 23. Hơn 10 phút sau, phút 36, Messi tinh tế chuyền bóng. Bóng đến chân Mac Allister, cầu thủ này đưa bóng căng ngang sang cánh trái và Di Maria sút tung lưới ĐT Pháp, nâng tỉ số lên 2 - 0.\r\n\r\nBị 2 \"gáo nước lạnh\" ngay trong hiệp 1, HLV Didier Deschamps thay Olivier Giroud và Dembele bằng 2 cầu thủ khác nhằm cứu vãn tình thế.\r\n\r\nSang hiệp 2, hiệu quả thay người của nhà đương kim vô địch bắt đầu có hiệu quả. Các cầu thủ Pháp dần lấy lại thế cân bằng.\r\n\r\nTường chừng trận chung kết đã an bài khi Argentina dẫn trước 2-0 thì vào phút 80, kịch tính của trận chung kết bắt đầu xuất hiện.\r\n\r\nLúc này, 1 cầu thủ Pháp bị đối thủ chèn ngã trong vòng cấm địa. Pháp được hưởng phạt đền và Mbappe ngắn tỉ số xuống 1-2. Rồi cũng chỉ sau đó 1 phút, phút 81, nhận đường chuyền của Thuram, danh thủ Mbappe tung cú sút volley và gỡ hòa 2-2.\r\n\r\nVới tỉ số hòa 2-2, hai đội vào thi đấu hiệp phụ.\r\n\r\nPhút 108,  Messi ghi bàn thắng thứ 3 cho Argentina. Nhưng tưởng đây là kết quả chung cuộc nhưng chẳng ai ngờ, phút 118 (hiệp phụ thứ 2), ĐT Pháp lại được hưởng quả phạt 11 m. Lần này vẫn là Mbappe thực hiện thành công và đưa trận đấu vào loạt sút 11 m để phân định thắng thua.\r\n\r\nỞ loạt đấu cân não này, trong 4 lần sút bóng, nhà đương kim vô địch \"hỏng ăn\" 2 quả (thủ môn Argentina đẩy được 1 quả) còn Messi và đồng đội thực hiện thành công cả 4 lần.\r\n\r\nChung cuộc, ĐT Argentina lần thứ 3 giành chức vô địch thế giới (1978, 1986, 2022).\r\n\r\nVới Messi, khi ĐT Argentina của Maradona giành chức vô địch lần 2 (năm 1986), anh mới 1 tuổi và không ai ngờ được sau 9 kỳ World Cup, Messi và đồng đội lần thứ 3 đã đưa đội bóng quê hương giành được cúp vàng.\r\n\r\nĐây là kỳ World Cup cuối cùng của Messi và dù không giành được danh hiệu cá nhân \"Vua phá lưới\" nhưng chức vô địch đã khiến anh mãn nguyện. Còn với Mbappe, tài năng bóng đá Pháp được an ủi bằng danh hiệu chân sút vô địch World Cup 2022 với 8 bàn thắng.\r\n\r\nTrận chung kết \"không tưởng\" này còn ghi một \"kỷ lục\" khác khi 2 cầu thủ của cùng 1 câu lạc bộ đều ghi bàn (Messi và Mbappe đang chơi cho CLB Paris Saint-Germain của Pháp).\r\n\r\nWorld Cup 2022 khép lại sau 29 ngày thi đấu. Các đội bóng lại hẹn gặp lại nhau sau 4 năm nữa tại Mỹ-Mexico-Canada.', '2022-12-19', 'Football', 'wcchampimg1.jpg'),
(18, 'Kylian Mbappe giành danh hiệu Vua phá lưới World Cup 2022', 'Với 8 bàn thắng ghi được trên đất Qatar, siêu sao Kylian Mbappe đã vượt qua Lionel Messi để giành được danh hiệu Vua phá lưới World Cup 2022.', 'Kylian Mbappe đã tỏa sáng với một hat-trick trong trận chung kết nhưng không thể giúp Pháp lên ngôi, đành cay đắng nhìn Argentina vô địch World Cup 2022.\r\n\r\nBa bàn thắng của Mbappe giúp Pháp gỡ hòa 3-3 siêu kịch tính trong 120 phút, nhưng cuối cùng họ vẫn trở thành cựu vương với thất bại 2-4 ở loạt sút luân lưu.\r\n\r\nTuy nhiên, với hat-trick ở trận này, Mbappe đã ghi được tổng cộng 8 bàn thắng tại ngày hội bóng đá lớn nhất hành tinh tổ chức tại Qatar. Anh cũng là Vua phá lưới ghi nhiều bàn nhất từ sau Ronaldo năm 2002 (cũng 8 bàn) và là người đầu tiên lập hat-trick ở chung kết từ sau Geoff Hurst năm 1966.\r\n\r\nThành tích ấn tượng này giúp ngôi sao sinh năm 1998 này vượt qua Lionel Messi (7 bàn) để giành danh hiệu Vua phá lưới World Cup 2022.\r\n\r\nTrong trận chung kết, Lionel Messi cũng đã có được cú đúp để góp công lớn giúp Argentina bước lên đỉnh thế giới.\r\n\r\nVới 8 bàn, Mbappe có tổng cộng 12 lần lập công sau hai kỳ World Cup, san bằng thành tích ghi bàn của Vua bóng đá Pele, và anh chỉ còn kém 4 bàn so với kỷ lục mà Miroslav Klose đang nắm giữ.\r\n\r\nTrong bảng danh sách thành tích, Messi có 13 bàn, cân bằng số bàn thắng của huyền thoại người Pháp Just Fontaine.', '2022-12-19', 'Football', 'topscoreimg1.jpg'),
(19, 'Cristiano Ronaldo viết tâm thư sau khi giấc mơ World Cup tan vỡ', 'Giành chức vô địch World Cup cho Bồ Đào Nha là giấc mơ lớn nhất và tham vọng nhất trong sự nghiệp của tôi. Mục tiêu đưa tuyển quốc gia lên đỉnh cao nhất của thế giới là giấc mơ lớn nhất của tôi\", Ronaldo chia sẻ trong tâm thư.', 'Cú đánh đầu của Youssef En-Nesyri phía Morocco chấm dứt hi vọng giành cúp vô địch World Cup 2022 của Bồ Đào Nha. Nguồn: VTV2/ Dân Trí. Theo Dân Trí, sau khi Bồ Đào Nha đã chịu thất bại 0-1 trước Morocco trong trận tứ kết của giải đấu ở Doha, với pha lập công duy nhất của cầu thủ Youssef En-Nesyri. Chia sẻ trên mạng xã hội, lần lượt Ronaldo và Bruno Fernandes thừa nhận: giấc mơ của đội bóng đã tan thành mây khói, khiến họ phải chia tay World Cup trong nước mắt. `Giành chức vô địch World Cup cho Bồ Đào Nha là giấc mơ lớn nhất và tham vọng nhất trong sự nghiệp của tôi`. May mắn thay tôi đã giành được nhiều danh hiệu trong sự nghiệp, trong đó có các danh hiệu với tuyển Bồ Đào Nha. Nhưng mục tiêu đưa tuyển quốc gia lên đỉnh cao nhất của thế giới là giấc mơ lớn nhất của tôi , Ronaldo chia sẻ trong tâm thư. Thật khó để diễn tả bằng một vài từ tất cả những gì chúng tôi cảm thấy ngày hôm qua sau khi trận đấu kết thúc, Bruno Fernandes nói.  `Giấc mơ của chúng tôi tan vỡ khi chúng tôi đã làm mọi thứ để hi vọng nó có kết thúc tốt hơn. Thật buồn và đau đớn vì đại diện cho đất nước có ý nghĩa nhiều hơn là chỉ chơi bóng đá. Mặc dù bị loại, tôi rất tự hào là người Bồ Đào Nha và càng tự hào hơn về tất cả những người đã cùng tôi đại diện cho đất nước tại World Cup này. Tôi cũng muốn chúc mừng đội Morocco vì trận đấu tuyệt vời và đã giành quyền vào bán kết World Cup một cách xứng đáng`, Bruno Fernandes chia sẻ. Người dẫn chương trình Piers Morgan bày tỏ sự đồng cảm với Ronaldo: `Thật buồn khi thấy Cristiano rơi nước mắt vì giấc mơ vô địch World Cup tan vỡ. Những ai chế nhạo Ronaldo cần nhớ lại những gì cậu ấy làm cho bóng đá. Đối với tôi, Cristiano là cầu thủ vĩ đại nhất mọi thời, một chàng trai tuyệt vời, người vừa trải qua một năm khó khăn nhất trong cuộc sống lẫn sân cỏ. Anh ấy xứng đáng nhận được sự tôn trọng của chúng ta`.', '2022-12-12', 'Football', 'wcdreamimg1.jpg'),
(21, 'Đội tuyển Đức thắng thuyết phục Pháp', 'Đội tuyển Đức có chiến thắng thuyết phục 2-0 trước tuyển Pháp nhờ các bàn thắng của Florian Wirtz và Kai Havertz.', 'Rạng sáng 24.3, đội tuyển Đức có chuyến làm khách đến sân của đội tuyển Pháp trong trận giao hữu quốc tế dịp FIFA Days.\r\n\r\nTrận đấu diễn ra hấp dẫn ngay sau tiếng còi khai cuộc. Đội tuyển Đức chỉ mất đúng 7 giây để có bàn mở tỉ số khi Toni Kroos kiến tạo cho Florian Wirtz dứt điểm thành bàn.\r\n\r\nNhững phút tiếp theo chứng kiến các pha bóng tấn công hết sức mạnh và uyển chuyển của cả 2 đội, với sự nổi bật ở khu vực trung tuyến từ những tiền vệ chất lượng của cả đôi bên.\r\nTuy nhiên, sau nhiều cơ hội được tạo ra thì vẫn không có bàn thắng nào được ghi thêm trong hiệp 1.\r\n\r\nBất ngờ lại tiếp tục xảy ra ngay đầu hiệp 2, phút 49, Kai Havertz nâng tỉ số lên 2-0 cho đội khách, sau tình huống phối hợp tấn công nhanh cực sắc nét, người dọn cỗ trong tình huống này là Jamal Musiala, khi tiền đạo trẻ này đi bóng qua cả thủ thành đối phương, trước khi chuyền bóng để đồng đội đệm vào lưới trống.\r\n\r\nDù bị dẫn trước 2 bàn nhưng đội tuyển Pháp cũng không thể triển khai được những tình huống tấn công. Đội chủ nhà gặp khó trong việc tìm đường đưa bóng lên trên khi Toni Kross của tuyển Đức đã làm chủ hoàn toàn khu trung tuyến. Trong khi đó, ngôi sao số 1 tuyển Pháp là Mbappe dù rất nỗ lực nhưng cũng không có tình huống dứt điểm nào đáng chú ý.\r\n\r\nTrận đấu khép lại với thắng lợi 2-0 dành cho đội tuyển Đức. Sau trận đấu này, đội tuyển Đức sẽ tiếp tục có trận giao hữu chất lượng với Hà Lan vào ngày 27.3.', '2024-03-24', 'Football', 'news21img1.jpg'),
(22, 'Rất khó để chơi tệ như Man United', ' Trao đổi trên chương trình podcast của mình, cựu hậu vệ Gary Neville đã có lên tiếng chỉ trích Manchester United.', 'Gary Neville nhận định, Manchester United đã có một màn trình diễn thực sự kém cỏi trong trận hòa Brentford. Cựu hậu vệ người Anh chia sẻ:  <br>`Với Manchester United, tôi không thể nghĩ đến bất kỳ thời điểm nào trong trận đấu đó, có thể là chỉ trong vài phút đầu tiên. Nhưng, tôi không thể nhớ nổi bất kỳ giai đoạn nào trong trận đấu đó mà họ đã làm tốt điều gì cả. <br>`Tôi đã nghĩ rằng Man United sẽ gây một chút áp lực lên Tottenham và Aston Villa trong cuộc đua đến Top 4, thực sự rất khó để chơi tệ như vậy.<br>`Trong bóng đá, bạn biết mình có thể chơi tệ, có thể thiếu cầu thủ, có thể bỏ lỡ cơ hội và đôi khi bạn cảm thấy không ổn. Nhưng, nỗ lực của Man United thật ảm đạm.`', '2024-04-01', 'Football', 'news22img2.gif'),
(24, 'Ronaldo bị “làm nhục” ngay tại quê nhà', 'HLV Fernando Santos lên tiếng bênh vực Cristiano Ronaldo, vì cựu cầu thủ Man Utd bị chỉ trích nặng nề ở trận đấu Bồ Đào Nha thua Hàn Quốc, lượt cuối bảng H World Cup 2022.', 'Chia sẻ trước cuộc họp báo ở vòng 1/8 World Cup 2022, HLV Fernando Santos của Bồ Đào Nha cho biết: `Cầu thủ Hàn Quốc sỉ nhục Ronaldo khi giục cậu ấy đi ra ngoài`. Đó là lý do Ronaldo tỏ ra giận dữ và mọi người đều thấy điều đó. Tôi thấy sự cố đó và không nghi ngờ gì nữa khi Pepe lao ngay về phía cầu thủ đội bạn để can thiệp. Tất nhiên cầu thủ Hàn Quốc không tấn công bằng hành động mà chỉ nói. Cầu thủ đó cố nói tiếng Anh với Ronaldo và Ronaldo đáp trả rằng `anh đã có một ngày tệ hại`, sau đó hai bên lời qua tiếng lại.Bản thân Ronaldo cũng lên tiếng về sự cố này: `Cầu thủ Hàn Quốc nói tôi đi ra ngoài nhanh lên. Tôi chỉ nói anh ta là hãy im đi vì anh ta không có quyền hạn gì ra lệnh cho tôi. Chuyện chỉ có vậy, tôi không có bất đồng gì với HLV` .Cristiano Ronaldo bị thay ra ở phút 65 bằng Adrien Silva, khi trận đấu Bồ Đào Nha - Hàn Quốc đang có tỷ số 1-1. Cầu thủ được cho là có lời lẽ không hay với Ronaldo là Cho Gue Song, khi Hàn Quốc sốt ruột dồn lên tấn công để tìm chiến thắng và giành vé đi tiếp. Cuối cùng, nỗ lực của Hàn Quốc đã được đền đáp với chiến thắng 2-1 với bàn thắng ấn định tỷ số ở phút 90+1 của Hwang Hee Chan. Hàn Quốc vượt qua Uruguay để giành ngôi nhì bảng H và gặp Brazil ở vòng 1/8.', '2022-12-04', 'Football', 'news20img3.jpg'),
(25, 'Đô cử Trịnh Văn Vinh: từ án cấm bốn năm đến giấc mơ Olympic', 'Ý định giải nghệ từng chạy thoáng qua tâm trí chính Trịnh Văn Vinh vì án cấm thi đấu bốn năm khi đang ở độ chín sự nghiệp, nhưng giấc mơ Olympic đã giữ anh ở lại với cử tạ.', 'Trịnh Văn Vinh sinh năm 1995 trong gia đình thuần nông ở thị xã Quế Võ, Bắc Ninh và dòng họ không ai theo nghiệp thể thao. Nhưng khi đang học cấp hai, anh bất ngờ bén duyên với cử tạ. Năm 2008, HLV Đỗ Đình Du đi khắp tỉnh tìm tài năng trẻ và nhìn thấy sức vóc tốt của Trịnh Văn Vinh, nên thuyết phục gia đình cho về Trung tâm huấn luyện thể thao Bắc Ninh để rèn giũa. <br> Từ bỡ ngỡ, Vinh nổi lên như đô cử nam hàng đầu hạng 62kg rồi được gọi vào đội tuyển quốc gia lúc 20 tuổi. Sự thăng tiến của anh khiến các HLV kinh ngạc khi liên tiếp giành HC vàng cử đẩy, HC bạc tổng cử ở giải vô địch châu Á 2016. Đến năm 2017, Vinh giành HC vàng cử giật giải vô địch thế giới 2017, với thành tích 136 kg để tạo kỷ lục cá nhân. Nhưng gây sốc nhất là tại SEA Games ở Malaysia khi Vinh giành HC vàng với tổng cử 307 kg để lập kỷ lục đại hội, và nhiều hơn một kg so với Eko Yuli Irawan – đô cử mạnh nhất Đông Nam Á và đang là đương kim á quân Olympic. <br> Sau đó, Eko phục thù khi giành HC vàng ASIAD 2018 với thành tích 311 kg. Vinh về nhì với 12 kg ít hơn nhưng vẫn tạo nên lịch sử khi giúp cử tạ Việt Nam lần đầu có huy chương ở hạng cân này. May mắn song hành khi cường quốc cử tạ hàng đầu thế giới Trung Quốc bị cấm dự Á vận hội vì doping. Trên đà phát triển tốt, Vinh vào nhóm VĐV được đầu tư trọng điểm cho Olympic Tokyo 2020. Những nhà làm chuyên môn kỳ vọng anh sẽ toả sáng giành huy chương, tái hiện lại khoảnh khắc Hoàng Anh Tuấn giành HC bạc Olympic Bắc Kinh 2008, hay HC đồng Trần Lê Quốc Toàn tại London 2012. Thế nhưng, mọi thứ chấm dứt vì doping.<br>Tháng 2/2019, Vinh bị Liên đoàn Cử tạ Thế giới (IWF) cấm thi đấu bốn năm kèm phạt 5.000 USD. Nguyên nhân là do tự ý dùng thuốc mà không biết có chất cấm, để chữa chấn thương lưng. `Chán nản và mất động lực`, Vinh nhớ lại và nói với VnExpress sáng nay 3/4. `Suy nghĩ giải nghệ có lúc thoáng qua trong đầu nhưng tôi chọn đi tập để quên đi thực tại`.<br>Một vài người quen khi đó đã gợi ý Vinh giải nghệ rồi chuyển hướng làm việc khác, nhưng anh chọn ở lại. Vinh không đổ lỗi cho hoàn cảnh mà coi sự việc lần này như bài học, miêu tả việc `tập chay` suốt bốn năm qua là hình phạt đính kèm. Anh cho hay: `Không dễ dàng gì khi ngày qua ngày chỉ tập, rồi nhìn đồng đội thi đấu. Động lực lớn nhất là dự Olympic giữ tôi tiếp tục tiến lên. Đầu tôi luôn văng vẳng tiếng gọi từ đấu trường danh giá nhất thế giới`.<br>Giấc mơ Olympic của Vinh lẽ ra đến từ bốn năm trước nếu không mắc sai lầm. Ở hạng 61kg năm ấy, đô cử Trung Quốc Li Fabin vượt trội với tổng cử 313 kg, còn HC bạc Eko Yuli Irawan (Indonesia) và HC đồng Igor Son (Kazakhstan) lần lượt đạt 302 kg và 294 kg – mức tạ nằm trong tầm với khiến Vinh càng thêm nuối tiếc.', '2024-04-03', 'Other Sports', 'news23img1.jpg'),
(26, 'Guardiola: \'Roy Keane cũng chỉ dẫn dắt CLB hạng Hai\'', 'HLV Pep Guardiola đáp trả việc cựu tiền vệ Roy Keane chỉ trích Erling Haaland chỉ thi đấu mờ nhạt như cầu thủ giải hạng Tư ở trận hòa Arsenal tại Ngoại hạng Anh.', 'Sau trận hòa 0-0 trên sân Etihad hôm 31/3, Keane chê Haaland thi đấu như cầu thủ từ League Two vì khả năng đóng góp vào lối chơi quá tệ và phải cải thiện nhiều. Trong hệ thống bóng đá Anh, dưới Premier League (Ngoại hạng Anh), lần lượt là Championship, League One và League Two.\\r\\n<br>\\r\\nTrong buổi họp báo trước trận gặp Aston Villa ở vòng 31 Ngoại hạng Anh, khi được hỏi về phát biểu này, Guardiola đáp: `Tôi không đồng ý với Keane, hoàn toàn không. Ông ấy chỉ là HLV ở giải hạng hai hoặc hạng ba thôi đúng không? Tôi không nghĩ như vậy`. <br>\\r\\nHLV người Tây Ban Nha cũng bất ngờ với những chỉ trích từ Keane. `Tôi rất ngạc nhiên khi điều này đến từ một cựu cầu thủ`, Guardiola bày tỏ. \\\"Từ các nhà báo, những người chưa từng thi đấu chuyên nghiệp, tôi có thể hiểu, nhưng việc các cựu cầu thủ chỉ trích Haaland khiến tôi bất ngờ. Giống như các trọng tài khi nghỉ hưu lại chỉ trích trọng tài. Việc thi đấu khó khăn thế nào? Ký ức của họ biến mất nhanh chóng quá. Những vấn đề mà các cầu thủ gặp phải. Họ bỏ lỡ cơ hội hàng nghìn, hàng triệu lần và họ bị tổn thương khi bị các cựu cầu thủ chỉ trích`.\\r\\n<br>\\r\\nGuardiola khẳng định sẽ không chỉ trích các HLV theo cách tương tự sau khi nghỉ hưu. Tuy nhiên, ông cũng cho rằng các cầu thủ phải chấp nhận thực tế bị chỉ trích vì đó là công việc. \\\"Nếu không muốn chấp nhận, bạn phải làm công việc khác. Khi bạn là người của công chúng, bạn phải chấp nhận điều đó\\\", ông nói thêm.', '2024-04-02', 'Football', 'news24img1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_images`
--

CREATE TABLE `news_images` (
  `id` int(100) NOT NULL,
  `news_id` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news_images`
--

INSERT INTO `news_images` (`id`, `news_id`, `image`) VALUES
(1, 7, 'news5img2.jpg'),
(2, 2, 'news1img2.png'),
(3, 2, 'news1img3.png'),
(4, 9, 'news6img2.jpg'),
(5, 9, 'news6img3.jpg'),
(6, 3, 'news2img2.jpg'),
(9, 4, 'news3img2.jpg'),
(10, 4, 'news3img3.jpg'),
(11, 5, 'news4img2.jpg'),
(12, 5, 'news4img3.jpg'),
(14, 10, 'news7img1.jpg'),
(15, 11, 'news8img2.jpg'),
(16, 12, 'news9img2.jpg'),
(17, 13, 'news10img2.jpg'),
(18, 14, 'news11img2.jpg'),
(19, 15, 'news12img2.jpg'),
(20, 16, 'news13img2.jpg'),
(21, 17, 'wcchampimg2.jpg'),
(22, 18, 'topscoreimg2.jpeg'),
(23, 19, 'wcdreamimg2.jpg'),
(24, 19, 'wcdreamimg3.jpg'),
(26, 21, 'news21img2.jpg'),
(29, 24, 'news20img2.jpg'),
(30, 25, 'news23img2.jpg'),
(31, 22, 'news22img1.jpg'),
(32, 26, 'news24img2.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `user_role`) VALUES
(1, 'admin1', 'adminwebsite@gmail.com', '$2y$10$vIVBsO1j3Z3IRoY1n5bBSOoh0xJUty5yi3gwIcHgAxWfH29OzD17W', 1),
(2, 'user1', 'iamuser1@gmail.com', '$2y$10$P8UVw8KsG6knM7pkFcj94.DATE.HRrvX8.snT06LUivy6Usy9izoG', 0),
(5, 'user2', 'iamuser2@gmail.com', '$2y$10$vMOiH5Yy.AFu3gN6ocntrO.x9cGXCrApZ/GdmiRxGHmx19H9cI97a', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news_images`
--
ALTER TABLE `news_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `news_images`
--
ALTER TABLE `news_images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `news_images`
--
ALTER TABLE `news_images`
  ADD CONSTRAINT `news_images_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
