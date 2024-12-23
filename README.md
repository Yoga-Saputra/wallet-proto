<pre style="font-size: 1.4vw;">
<p align="center">
Wallet Proto
</p>
</pre>
<p align="center">
RPC proto definition files for wallet.
</p>

## 🧤 Preparation

- Docker is required
- namely/protoc-all docker container
- ghcr.io/cpcloud/protoletariat:latest docker container (for fixing import path relative on python3)

## Updating gRPC proto stub from this repo

### All submodule

```bash
git submodule foreach --recursive git add -A .
```

```bash
git submodule foreach --recursive "git commit -m '{{Commit message}}'"
```

```bash
git submodule foreach --recursive git push origin HEAD:main
```

---

### Specific submodule

```bash
cd into desired submodule path
```

```bash
git add -A .
```

```bash
git push origin HEAD:main
```

## 📚 Docs

- V1
  - [Internal System Protocol Service](docs/v1/insys_docs.md)
  - [Provider System Protocol Service](docs/v1/provsys_docs.md)
