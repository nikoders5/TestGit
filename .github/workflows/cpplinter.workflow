action "action-cpp-lint" {
  uses = "CyberZHG/github-action-cpp-lint@0.0.2"
}

workflow "C++ Lint" {
  on = "push"
  resolves = ["lint-action"]
}

action "lint-action" {
  uses = "CyberZHG/github-action-cpp-lint@master"
  args = "--linelength=120 --filter=-build/include_subdir include/*.h src/*.cpp tests/*.cpp"
}
