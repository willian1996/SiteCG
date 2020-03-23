-- Copiando estrutura para tabela clubedosgenerais.dw_log
CREATE TABLE IF NOT EXISTS `dw_log` (
  `log_id` int(2) NOT NULL AUTO_INCREMENT,
  `log_us` text NOT NULL,
  `log_op` text NOT NULL,
  `log_dh` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1368 DEFAULT CHARSET=UTF8;

-- Copiando estrutura para tabela clubedosgenerais.neoAlbumCategorias
CREATE TABLE IF NOT EXISTS `neoAlbumCategorias` (
  `albumCategoriaID` int(6) NOT NULL AUTO_INCREMENT,
  `albumCategoriaTitulo` text NOT NULL,
  `albumCategoriaDescricao` text NOT NULL,
  `albumCategoriaOrdem` text NOT NULL,
  `albumCategoriaImagem` text NOT NULL,
  `albumCategoriaDataHora` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `albumCategoriaConta` text NOT NULL,
  `albumCategoriaBloqueio` text NOT NULL,
  PRIMARY KEY (`albumCategoriaID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=UTF8;

-- Copiando estrutura para tabela clubedosgenerais.neoAlbumIndice
CREATE TABLE IF NOT EXISTS `neoAlbumIndice` (
  `albumIndiceID` int(9) NOT NULL AUTO_INCREMENT,
  `albumIndiceGaleria` int(9) NOT NULL,
  `albumIndiceFoto` int(9) NOT NULL,
  `albumIndiceOrdem` int(9) NOT NULL,
  PRIMARY KEY (`albumIndiceID`)
) ENGINE=MyISAM AUTO_INCREMENT=2641 DEFAULT CHARSET=UTF8;

-- Copiando estrutura para tabela clubedosgenerais.neoAlbuns
CREATE TABLE IF NOT EXISTS `neoAlbuns` (
  `albumID` int(11) NOT NULL AUTO_INCREMENT,
  `albumCategoria` int(11) NOT NULL,
  `albumTitulo` text NOT NULL,
  `albumDescricao` text NOT NULL,
  `albumDataHora` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `albumData` date NOT NULL DEFAULT '0000-00-00',
  `albumURL` text NOT NULL,
  `albumTags` text NOT NULL,
  `albumUsuario` text NOT NULL,
  `albumBloqueio` text NOT NULL,
  PRIMARY KEY (`albumID`)
) ENGINE=MyISAM AUTO_INCREMENT=174 DEFAULT CHARSET=utf8;

-- Copiando estrutura para tabela clubedosgenerais.neoCategorias
CREATE TABLE IF NOT EXISTS `neoCategorias` (
  `categoriaID` int(6) NOT NULL AUTO_INCREMENT,
  `categoriaTitulo` text NOT NULL,
  `categoriaOrdem` int(2) NOT NULL,
  `categoriaDataHora` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `categoriaConta` text NOT NULL,
  `categoriaBloqueio` text NOT NULL,
  PRIMARY KEY (`categoriaID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=UTF8;

-- Copiando estrutura para tabela clubedosgenerais.neoDestaques
CREATE TABLE IF NOT EXISTS `neoDestaques` (
  `destaqueID` int(6) NOT NULL AUTO_INCREMENT,
  `destaqueCategoria` int(2) NOT NULL,
  `destaqueTitulo` text NOT NULL,
  `destaqueManchete` text NOT NULL,
  `destaqueDataInicio` date NOT NULL DEFAULT '0000-00-00',
  `destaqueDataFim` date NOT NULL DEFAULT '0000-00-00',
  `destaqueLink` text NOT NULL,
  `destaqueDataHora` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `destaqueConta` text NOT NULL,
  `destaqueBloqueio` text NOT NULL,
  PRIMARY KEY (`destaqueID`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

-- Copiando estrutura para tabela clubedosgenerais.neoDestaqueTexto
CREATE TABLE IF NOT EXISTS `neoDestaqueTexto` (
  `destaqueID` int(6) NOT NULL AUTO_INCREMENT,
  `destaqueTitulo` text NOT NULL,
  `destaqueManchete` text NOT NULL,
  `destaqueLink` text NOT NULL,
  `destaqueDataInicio` date NOT NULL DEFAULT '0000-00-00',
  `destaqueDataFim` date NOT NULL DEFAULT '0000-00-00',
  `destaqueDataHora` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `destaqueConta` text NOT NULL,
  `destaqueBloqueio` text NOT NULL,
  PRIMARY KEY (`destaqueID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando estrutura para tabela clubedosgenerais.neoDstDfl
CREATE TABLE IF NOT EXISTS `neoDstDfl` (
  `dstDflID` int(6) NOT NULL AUTO_INCREMENT,
  `dstDflW` text NOT NULL,
  `dstDflH` text NOT NULL,
  `dstDflT` text NOT NULL,
  PRIMARY KEY (`dstDflID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando estrutura para tabela clubedosgenerais.neoMembro
CREATE TABLE IF NOT EXISTS `neoMembro` (
  `membroID` int(6) NOT NULL AUTO_INCREMENT,
  `membroNome` text NOT NULL,
  `membroPais` text NOT NULL,
  `membroRegiao` text NOT NULL,
  `membroArma` text NOT NULL,
  `membroHistoria` text NOT NULL,
  `membroDataAdmissao` date NOT NULL DEFAULT '0000-00-00',
  `membroPosto` text NOT NULL,
  `membroComendas` text NOT NULL,
  `membroGaleria` text NOT NULL,
  `membroVideo` text NOT NULL,
  `membroArquivo` text NOT NULL,
  `membroOrdem` int(6) NOT NULL,
  `membroDataHora` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `membroConta` text NOT NULL,
  `membroBloqueio` text NOT NULL,
  PRIMARY KEY (`membroID`)
) ENGINE=MyISAM AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;

-- Copiando estrutura para tabela clubedosgenerais.neoMembroRegiao
CREATE TABLE IF NOT EXISTS `neoMembroRegiao` (
  `membroRegiaoID` int(6) NOT NULL AUTO_INCREMENT,
  `membroRegiaoTitulo` text NOT NULL,
  `membroRegiaoOrdem` int(6) NOT NULL,
  `membroRegiaoDataHora` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `membroRegiaoConta` text NOT NULL,
  `membroRegiaoBloqueio` text NOT NULL,
  PRIMARY KEY (`membroRegiaoID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Copiando estrutura para tabela clubedosgenerais.neoPaginas
CREATE TABLE IF NOT EXISTS `neoPaginas` (
  `paginaID` int(6) NOT NULL AUTO_INCREMENT,
  `paginaTipo` text NOT NULL,
  `paginaTitulo` text NOT NULL,
  `paginaResumo` text NOT NULL,
  `paginaCorpo` longtext NOT NULL,
  `paginaAlbum` text NOT NULL,
  `paginaArquivo` text NOT NULL,
  `paginaVideo` text NOT NULL,
  `paginaDataHora` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `paginaConta` text NOT NULL,
  PRIMARY KEY (`paginaID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando estrutura para tabela clubedosgenerais.neoPodcasts
CREATE TABLE IF NOT EXISTS `neoPodcasts` (
  `podcastID` int(9) NOT NULL AUTO_INCREMENT,
  `podcastCategoria` int(6) NOT NULL,
  `podcastTitulo` text COLLATE latin1_general_ci NOT NULL,
  `podcastManchete` text COLLATE latin1_general_ci NOT NULL,
  `podcastDescricao` text COLLATE latin1_general_ci NOT NULL,
  `podcastEmbed` text COLLATE latin1_general_ci NOT NULL,
  `podcastURL` text COLLATE latin1_general_ci NOT NULL,
  `podcastXML` text COLLATE latin1_general_ci NOT NULL,
  `podcastVideo` text COLLATE latin1_general_ci NOT NULL,
  `podcastTags` text COLLATE latin1_general_ci NOT NULL,
  `podcastConta` text COLLATE latin1_general_ci NOT NULL,
  `podcastDataHora` datetime NOT NULL,
  `podcastBloqueio` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`podcastID`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Copiando estrutura para tabela clubedosgenerais.neoPublicacoes
CREATE TABLE IF NOT EXISTS `neoPublicacoes` (
  `publicacaoID` int(6) NOT NULL AUTO_INCREMENT,
  `publicacaoCategoria` text NOT NULL,
  `publicacaoTitulo` text NOT NULL,
  `publicacaoManchete` text NOT NULL,
  `publicacaoCorpo` longtext NOT NULL,
  `publicacaoURL` text NOT NULL,
  `publicacaoTags` text NOT NULL,
  `publicacaoGaleria` text NOT NULL,
  `publicacaoDataHora` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publicacaoDataLibera` date NOT NULL DEFAULT '0000-00-00',
  `publicacaoVideo` text NOT NULL,
  `publicacaoArquivo` text NOT NULL,
  `publicacaoConta` text NOT NULL,
  `publicacaoBloqueio` text NOT NULL,
  PRIMARY KEY (`publicacaoID`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=utf8;

-- Copiando estrutura para tabela clubedosgenerais.neoUploads
CREATE TABLE IF NOT EXISTS `neoUploads` (
  `uploadID` int(6) NOT NULL AUTO_INCREMENT,
  `uploadTitulo` text NOT NULL,
  `uploadExtensao` text NOT NULL,
  `uploadDataHora` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `uploadConta` text NOT NULL,
  PRIMARY KEY (`uploadID`)
) ENGINE=MyISAM AUTO_INCREMENT=976 DEFAULT CHARSET=utf8;

-- Copiando estrutura para tabela clubedosgenerais.neoVideos
CREATE TABLE IF NOT EXISTS `neoVideos` (
  `videoID` int(6) NOT NULL AUTO_INCREMENT,
  `videoTitulo` text NOT NULL,
  `videoDescricao` longtext NOT NULL,
  `videoChave` text NOT NULL,
  `videoTipo` text NOT NULL,
  `videoURL` text NOT NULL,
  `videoTags` text NOT NULL,
  `videoDataHora` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `videoDataLibera` date NOT NULL DEFAULT '0000-00-00',
  `videoConta` text NOT NULL,
  `videoBloqueio` text NOT NULL,
  PRIMARY KEY (`videoID`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- Copiando estrutura para tabela clubedosgenerais.neoZConfigRemote
CREATE TABLE IF NOT EXISTS `neoZConfigRemote` (
  `zcID` int(6) NOT NULL AUTO_INCREMENT,
  `zcKY` text NOT NULL,
  `zcDM` text NOT NULL,
  `zcDT` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`zcID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=UTF8;
