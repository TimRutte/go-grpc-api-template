// Package version has all its values either pulled from the runtime or set via
// flags in make at compile time.
//
// DO NOT EDIT
package version

import (
	"fmt"
	"runtime"
)

var (
	// GitCommit is the SHA that this was compiled with
	GitCommit string //nolint:globalisation

	// Version is the git tag version number that's running now
	Version string //nolint:globalisation

	// BuildDate is the date built
	BuildDate string //nolint:globalisation

	// GoVersion is the version of the go binary
	GoVersion = runtime.Version() //nolint:globalisation

	// OsArch is the os and arch targeted during build
	OsArch = fmt.Sprintf("%s %s", runtime.GOOS, runtime.GOARCH) //nolint:globalisation
)
