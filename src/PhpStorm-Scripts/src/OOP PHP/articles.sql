CREATE TABLE articles (
  article_id INT(11)        NOT NULL AUTO_INCREMENT,
  title      VARCHAR(255)   NOT NULL DEFAULT '',
  intro      TEXT           NOT NULL,
  body       TEXT           NOT NULL,
  author     VARCHAR(255)   NOT NULL DEFAULT '',
  published  VARCHAR(11)    DEFAULT NULL,
  public     ENUM('0','1')  NOT NULL DEFAULT '0',
  PRIMARY KEY (article_id),
  FULLTEXT KEY art_search (title, body, author)
)
