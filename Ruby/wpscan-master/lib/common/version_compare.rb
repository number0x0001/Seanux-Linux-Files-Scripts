# encoding: UTF-8

class VersionCompare

  # Compares two version strings. Returns true if version1 <= version2
  # and false otherwise
  #
  # @param [ String ] version1
  # @param [ String ] version2
  #
  # @return [ Boolean ]
  def self.lesser_or_equal?(version1, version2)
    # Prepend a '0' if the version starts with a '.'
    version1 = "0#{version1}" if version1 && version1[0,1] == '.'
    version2 = "0#{version2}" if version2 && version2[0,1] == '.'

    return true if (version1 == version2)
    # Both versions must be set
    return false unless (version1 and version2)
    return false if (version1.empty? or version2.empty?)
    begin
      return true if (Gem::Version.new(version1) < Gem::Version.new(version2))
    rescue ArgumentError => e
      # Example: ArgumentError: Malformed version number string a
      return false if e.message =~ /Malformed version number string/
      raise
    end
    return false
  end
end
