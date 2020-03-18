USE WorldEvents
SELECT
tblCategory.CategoryName,
COUNT (tblEvent.EventName) AS [Number of Events]

FROM
tblCategory
INNER JOIN
tblEvent ON tblCategory.CategoryID = tblEvent.CategoryID

GROUP BY tblCategory.CategoryName

ORDER BY [Number of Events] DESC
