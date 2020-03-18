SELECT 
DATENAME(YEAR, EpisodeDate) AS [Episode year],
EnemyName,
COUNT(EnemyName) AS [Number of Episodes]

FROM     tblEpisodeEnemy 
INNER JOIN
  tblEnemy ON tblEpisodeEnemy.EnemyId = tblEnemy.EnemyId 
INNER JOIN
  tblEpisode ON tblEpisodeEnemy.EpisodeId = tblEpisode.EpisodeId

GROUP BY tblEnemy.EnemyName, DATENAME(YEAR, EpisodeDate)

ORDER BY [Number of Episodes] DESC