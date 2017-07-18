
CREATE TABLE IF NOT EXISTS `tb_sinhvien` (
  `sv_id` int(11) NOT NULL AUTO_INCREMENT,
  `sv_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sv_sex` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sv_birthday` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`sv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_sinhvien`
--

INSERT INTO `tb_sinhvien` (`sv_id`, `sv_name`, `sv_sex`, `sv_birthday`) VALUES
(1, 'Nguyễn Văn Cường', 'Nam', '20-11-2015'),
(2, 'Hoàng Thị Thảo', 'Nữ', '10-12-2014'),
(3, 'Nguyễn Trần Tú', 'Nam', '30-01-1990'),
(4, 'Ngô Thị hòa', 'Nữ', '20-11-2011');