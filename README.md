# Eel helpers for fetching Media

WIP! Just one helper for now:

```
faces = T:Collection {
	collection = ${MediaQuery.imagesByTag('faces')}
	itemName = 'asset'
	itemRenderer = TYPO3.Neos:ImageTag {
		asset = ${asset}
	}
}
```

**If you like the idea of this package, contributions are welcome!**
