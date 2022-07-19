LANG := C

# http://postd.cc/auto-documented-makefile/
.DEFAULT_GOAL := help
.PHONY: help
help: ## Show this help
	@grep -E '^[0-9a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) \
	| awk 'BEGIN {FS = ":.*?## "}; {printf "${CYAN}%-30s${RESET} %s\n", $$1, $$2}'

.PHONY: image
image: ## Build compose services
	@docker compose build --build-arg credential=$(shell grep github ~/.git-credentials)

.PHONY: up
up: ## Up services
	@docker compose up

.PHONY: down
down: ## Down services
	@docker compose down

