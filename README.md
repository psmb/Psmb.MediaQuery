# Eel helpers for fetching Media

Just one helper for now that would help you to display a gallery of all images tagged with `faces`:

```
faces = Neos.Fusion:Collection {
	collection = ${MediaQuery.imagesByTag('faces')}
	itemName = 'asset'
	itemRenderer = TYPO3.Neos:ImageTag {
		asset = ${asset}
	}
}
```

**If you like the idea of this package, contributions are welcome!**
