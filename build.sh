#!/bin/bash
podman build -t quay.io/apoczeka/fractal -f Containerfile
podman push quay.io/apoczeka/fractal
