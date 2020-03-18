USE DoctorWho

SELECT
	A.AuthorName, 
	COUNT(A.AuthorName) AS [Episodes],
	MIN(E.EpisodeDate) AS [Earliest Date],
	MAX(E.EpisodeDate) AS [Latest Date]
FROM
	tblEpisode E
JOIN
	tblAuthor A ON A.AuthorId = E.AuthorId
Group BY
	A.AuthorName
ORDER BY
	[Episodes] DESC