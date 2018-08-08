CREATE DATABASE `dbsertifikasi` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `t_data_pribadi` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` CHAR(16) NOT NULL,
  `nama` VARCHAR(50) NOT NULL,
  `nohp` VARCHAR(12) NOT NULL,
  `tmptlahir` VARCHAR(25) NOT NULL,
  `tgllahir` DATE NOT NULL,
  `email` VARCHAR(50) NOT NULL,

  PRIMARY KEY `pk_t_data_pribadi`(`id`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tru_skema` (
  `kd` CHAR(2) NOT NULL,
  `skema` VARCHAR(50),
  PRIMARY KEY `pk_tru_skema`(`kd`)
) ENGINE = InnoDB;

INSERT INTO `tru_skema` VALUES
('01','programming'),
('02','networking'),
('03','multimedia')
;


CREATE TABLE IF NOT EXISTS `tru_tmptujikom` (
  `kd` CHAR(2) NOT NULL,
  `tmptujikom` VARCHAR(50),
  PRIMARY KEY `tru_tmptujikom`(`kd`)
) ENGINE = InnoDB;

INSERT INTO `tru_tmptujikom` VALUES
('01','jambi'),
('02','banda aceh'),
('03','padang'),
('04','bandar lampung')
;


CREATE TABLE IF NOT EXISTS `t_sertifikasi` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `skema` CHAR(2) NOT NULL,
  `tmptujikom` CHAR(2) NOT NULL,
  `rekomendasi` VARCHAR(100) NOT NULL,
  `ttsertifikasi` DATE NOT NULL,
  `organisasi` VARCHAR(100) NOT NULL,
  `id_data_pribadi` BIGINT UNSIGNED NOT NULL,

  PRIMARY KEY `pk_t_sertifikasi`(`id`),

  CONSTRAINT `fk_the_sertifikasi_far_data_pribadi`
    FOREIGN KEY (`id_data_pribadi`)
    REFERENCES `t_data_pribadi` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,

  CONSTRAINT `fk_the_sertifikasi_far_skema`
    FOREIGN KEY (`skema`)
    REFERENCES `tru_skema` (`kd`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,

  CONSTRAINT `fk_sertifikasi_far_tmptujikom`
    FOREIGN KEY (`tmptujikom`)
    REFERENCES `tru_tmptujikom` (`kd`)
    ON DELETE CASCADE
    ON UPDATE CASCADE

) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `t_admin` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `usrname` VARCHAR(25) NOT NULL,
  `passw` VARCHAR(50) NOT NULL,
  `nama` VARCHAR(50) NOT NULL,

  PRIMARY KEY `pk_t_admin`(`id`)
) ENGINE = InnoDB;

INSERT INTO `t_admin` (`usrname`,`passw`,`nama`) VALUES
('admin', md5('admin'),'admin')
;
